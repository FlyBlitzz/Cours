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
function cart_add($id, $qty = 1)
{
    cart_init();
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + max(1, (int) $qty);
}
function cart_update($id, $qty)
{
    cart_init();
    $qty = (int) $qty;
    if ($qty <= 0)
        unset($_SESSION['cart'][$id]);
    else
        $_SESSION['cart'][$id] = $qty;
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
        if ($p = find_product($pdo, $id)) {
            $p['qty'] = $qty;
            $p['total'] = $qty * (float) $p['prix'];
            $items[] = $p;
        }
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