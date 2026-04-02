<?php
$produit = "Casque Sony";
$categorie = "Audio";
$prixHT = 349.00;
$tva = 0.20;
$prixTTC = $prixHT * (1 + $tva);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO-FICHE</title>
</head>

<body>
    <h1>Affichage du produit</h1>
    <h2><?= $produit ?></h2>
    <p>Catégorie/Rayon : <?= $categorie ?></p>
    <p>Prix TTC : <strong><?= $prixTTC ?> € </strong></p>
</body>

</html>