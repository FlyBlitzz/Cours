<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../db/connexion.php';

function format_price($euros)
{
    return number_format((float) $euros, 0, ',', ' ') . ' €';
}

function all_products(PDO $pdo)
{
    $sql = 'SELECT
                "Code_produit" AS id,
                "Nom_produit"  AS nom,
                "Qté_stock"    AS stock,
                "Prix_TTC"     AS prix,
                "Image"        AS image,
                "Descriptif"   AS descriptif
            FROM public.products
            ORDER BY "Code_produit" ASC';
    return $pdo->query($sql)->fetchAll();
}

function find_product(PDO $pdo, $id)
{
    $st = $pdo->prepare('SELECT
                "Code_produit" AS id,
                "Nom_produit"  AS nom,
                "Qté_stock"    AS stock,
                "Prix_TTC"     AS prix,
                "Image"        AS image,
                "Descriptif"   AS descriptif
            FROM public.products
            WHERE "Code_produit" = :id');
    $st->execute([':id' => $id]);
    return $st->fetch();
}

// ------- Panier (sessions)
function cart_init()
{
    if (!isset($_SESSION['cart']))
        $_SESSION['cart'] = [];
}
function cart_add(PDO $pdo, $id, $qty = 1)
{
    cart_init();

    $id = (int) $id;
    $qty = max(1, (int) $qty);

    // Ensure we don't add more than available stock.
    if (!$product = find_product($pdo, $id)) {
        return;
    }

    $stock = (int) $product['stock'];
    if ($stock <= 0) {
        return;
    }

    $current = (int) ($_SESSION['cart'][$id] ?? 0);
    $newQty = min($current + $qty, $stock);

    if ($newQty <= 0) {
        unset($_SESSION['cart'][$id]);
    } else {
        $_SESSION['cart'][$id] = $newQty;
    }
}

function cart_update(PDO $pdo, $id, $qty)
{
    cart_init();

    $id = (int) $id;
    $qty = (int) $qty;

    if ($qty <= 0) {
        unset($_SESSION['cart'][$id]);
        return;
    }

    if (!$product = find_product($pdo, $id)) {
        return;
    }

    $stock = (int) $product['stock'];
    $qty = min($qty, max(0, $stock));

    if ($qty <= 0) {
        unset($_SESSION['cart'][$id]);
    } else {
        $_SESSION['cart'][$id] = $qty;
    }
}

function cart_remove($id)
{
    cart_init();
    unset($_SESSION['cart'][$id]);
}
function cart_clear()
{
    $_SESSION['cart'] = [];
}

function cart_items(PDO $pdo)
{
    cart_init();
    $items = [];

    foreach ($_SESSION['cart'] as $id => $qty) {
        if (!$p = find_product($pdo, $id)) {
            continue;
        }

        $stock = (int) $p['stock'];
        if ($stock <= 0) {
            // Remove out-of-stock products from cart
            unset($_SESSION['cart'][$id]);
            continue;
        }

        // Clamp qty to available stock
        $qty = min((int) $qty, $stock);
        if ($qty !== (int) $_SESSION['cart'][$id]) {
            $_SESSION['cart'][$id] = $qty;
        }

        $p['qty'] = $qty;
        $p['total'] = $qty * (float) $p['prix'];
        $items[] = $p;
    }

    return $items;
}

function cart_total(PDO $pdo)
{
    $s = 0;
    foreach (cart_items($pdo) as $it) {
        $s += $it['total'];
    }
    return $s;
}

function create_order(PDO $pdo, string $customerName, string $customerEmail, array $items, float $total)
{
    $pdo->beginTransaction();
    try {
        $stmt = $pdo->prepare('INSERT INTO public.commandes (customer_name, customer_email, total) VALUES (:name, :email, :total) RETURNING id');
        $stmt->execute([
            ':name' => $customerName,
            ':email' => $customerEmail,
            ':total' => $total,
        ]);
        $orderId = (int) $stmt->fetchColumn();

        $itemStmt = $pdo->prepare('INSERT INTO public.commande_items (commande_id, product_id, product_name, unit_price, quantity, total) VALUES (:commande_id, :product_id, :product_name, :unit_price, :quantity, :total)');

        foreach ($items as $item) {
            $itemStmt->execute([
                ':commande_id' => $orderId,
                ':product_id' => $item['id'],
                ':product_name' => $item['nom'],
                ':unit_price' => $item['prix'],
                ':quantity' => $item['qty'],
                ':total' => $item['total'],
            ]);
        }

        $pdo->commit();
        return $orderId;
    } catch (Throwable $e) {
        $pdo->rollBack();
        throw $e;
    }
}

function find_order(PDO $pdo, $id)
{
    $st = $pdo->prepare('SELECT * FROM public.commandes WHERE id = :id');
    $st->execute([':id' => $id]);
    return $st->fetch();
}

function find_order_items(PDO $pdo, $orderId)
{
    $st = $pdo->prepare('SELECT * FROM public.commande_items WHERE commande_id = :orderId');
    $st->execute([':orderId' => $orderId]);
    return $st->fetchAll();
}