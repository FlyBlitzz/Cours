<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../db/connexion.php';

function format_prix($euros)
{
    return number_format((float) $euros, 0, ',', ' ') . ' €';
}

function tous_produits(PDO $pdo)
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
    $st = $pdo->prepare($sql);
    $st->execute();
    $products = $st->fetchAll();
    foreach ($products as &$p) {
        $p['image'] = str_replace('.jpg', '.webp', $p['image']);
    }
    return $products;
}

function trouver_produit(PDO $pdo, $id)
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
    $p = $st->fetch();
    if ($p) {
        $p['image'] = str_replace('.jpg', '.webp', $p['image']);
    }
    return $p;
}

// ------- Panier -------
function panier_init()
{
    if (!isset($_SESSION['panier']))
        $_SESSION['panier'] = [];
}
function panier_ajouter(PDO $pdo, $id, $qty = 1)
{
    panier_init();

    $id = (int) $id;
    $qty = max(1, (int) $qty);

    // S'assure que nous n'ajoutons pas plus que le stock disponible.
    if (!$product = trouver_produit($pdo, $id)) {
        return;
    }

    $stock = (int) $product['stock'];
    if ($stock <= 0) {
        return;
    }

    $current = (int) ($_SESSION['panier'][$id] ?? 0);
    $newQty = min($current + $qty, $stock);

    if ($newQty <= 0) {
        unset($_SESSION['panier'][$id]);
    } else {
        $_SESSION['panier'][$id] = $newQty;
    }
}

function panier_modifier(PDO $pdo, $id, $qty)
{
    panier_init();

    $id = (int) $id;
    $qty = (int) $qty;

    if ($qty <= 0) {
        unset($_SESSION['panier'][$id]);
        return;
    }

    if (!$product = trouver_produit($pdo, $id)) {
        return;
    }

    $stock = (int) $product['stock'];
    $qty = min($qty, max(0, $stock));

    if ($qty <= 0) {
        unset($_SESSION['panier'][$id]);
    } else {
        $_SESSION['panier'][$id] = $qty;
    }
}

function panier_supprimer($id)
{
    panier_init();
    unset($_SESSION['panier'][$id]);
}
function panier_effacer()
{
    $_SESSION['panier'] = [];
}

function panier_articles(PDO $pdo)
{
    panier_init();
    $articles = [];

    foreach ($_SESSION['panier'] as $id => $qty) {
        if (!$p = trouver_produit($pdo, $id)) {
            continue;
        }

        $stock = (int) $p['stock'];
        if ($stock <= 0) {
            // Supprime les produits en rupture de stock du panier
            unset($_SESSION['panier'][$id]);
            continue;
        }

        // Quantité de produit par rapport au stock disponible
        $qty = min((int) $qty, $stock);
        if ($qty !== (int) $_SESSION['panier'][$id]) {
            $_SESSION['panier'][$id] = $qty;
        }

        $p['qty'] = $qty;
        $p['total'] = $qty * (float) $p['prix'];
        $articles[] = $p;
    }

    return $articles;
}

function panier_total(PDO $pdo)
{
    $totalPanier = 0;
    foreach (panier_articles($pdo) as $article) {
        $totalPanier += $article['total'];
    }
    return $totalPanier;
}

function creer_commande(PDO $pdo, string $customerName, string $customerEmail, array $items, float $total)
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

function trouver_commande(PDO $pdo, $id)
{
    $st = $pdo->prepare('SELECT * FROM public.commandes WHERE id = :id');
    $st->execute([':id' => $id]);
    return $st->fetch();
}

function trouver_items_commande(PDO $pdo, $orderId)
{
    $st = $pdo->prepare('SELECT * FROM public.commande_items WHERE commande_id = :orderId');
    $st->execute([':orderId' => $orderId]);
    return $st->fetchAll();
}