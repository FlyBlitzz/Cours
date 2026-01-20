<?php

$produits = [
    "Stylo" => 1.50,
    "Cahier" => 2.80,
    "Trousse" => 9.90
];

$total = 0;

foreach ($produits as $prix) {
    $total += $prix;
}

echo "Le prix total des produits est de $total €.";

echo PHP_EOL;
$total = array_sum($produits);
echo "Le prix total des produits est de $total €.";
