<?php
// Inclusion du tableau de produits
require_once __DIR__ . '/produits.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
    <style>
        .produit {
            border: 1px solid #ccc;
            padding: 12px;
            margin-bottom: 10px;
        }

        .produit a {
            display: inline-block;
            margin-top: 8px;
            color: blue;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h1>Liste des produits</h1>

    <?php foreach ($produits as $produit): ?>

        <div class="produit">
            <h2><?= htmlspecialchars($produit['nom']) ?></h2>
            <p>Prix : <?= $produit['prix'] ?> €</p>

            <!-- Lien vers la page détail -->
            <a href="#">
                Voir le détail
            </a>
        </div>

    <?php endforeach; ?>

</body>

</html>