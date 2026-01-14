<?php
$produits = [
    "tomates" => 3,
    "pommes" => 5,
    "orange" => 2.5,
];
$resultat = 0;
foreach ($produits as $prix) {
    $resultat += $prix;
}
echo "le prix total des produits est de $resultat €";