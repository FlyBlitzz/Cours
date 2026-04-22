<?php
// Déclaration de variables
$nomProduit = "iPhone 15 Pro";
$prix = 1199.90;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02-Variables</title>
</head>

<body>
    <h1>Afficher les variables</h1>

    <h2>Version echo</h2>
    <?php echo "<p>Produit : " . $nomProduit . "</p>"; ?>
    <?php echo "<p>Prix : " . $prix . "</p>"; ?>

    <h2>Version balise courte</h2>
    <p>Produit : <?= $nomProduit ?></p>
    <p>Prix : <?= $prix ?></p>

    <h2>Version interpolation</h2>
    <?php echo "<p>Produit : $nomProduit </p>"; ?>
    <?= "<p>Produit : $nomProduit </p>" ?>
</body>

</html>