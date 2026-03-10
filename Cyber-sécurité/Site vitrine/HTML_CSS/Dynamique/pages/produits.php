<?php
require_once "../db/connexion.php";

$stmt = $pdo->query("SELECT * FROM produits");
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "../includes/header.php";
?>

<section id="produits" class="mt-12">
    <h2 class="text-2xl font-extrabold underline-gold">Produits & packs</h2>

    <div class="grid gap-5 md:grid-cols-2">
        <?php foreach ($produits as $p): ?>
            <?php include "../templates/produit.php"; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php include "../includes/footer.php"; ?>