<?php
require_once __DIR__ . '/../includes/functions.php';
$produits = all_products($pdo);

include __DIR__ . '/../includes/header.php';
?>

<section id="produits" class="mt-12">
    <h2 class="text-2xl font-extrabold underline-gold">Produits & packs</h2>

    <div class="grid gap-5 md:grid-cols-2">
        <?php foreach ($produits as $p): ?>
            <?php include __DIR__ . '/../templates/product-card.php'; ?>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>