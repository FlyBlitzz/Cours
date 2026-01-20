<?php

$produits = [
    'P0001' => ['Désignation' => 'Produit 1', 'Prix' => 50.99, 'Stock' => 10],
    'P0002' => ['Désignation' => 'Produit 2', 'Prix' => 99.99, 'Stock' => 20],
    'P0003' => ['Désignation' => 'Produit 3', 'Prix' => 25.50, 'Stock' => 6],
    'P0004' => ['Désignation' => 'Produit 4', 'Prix' => 130.99, 'Stock' => 4],
];

$reference = readline("Saisir une référence : ");

$referenceCorrecte = false;
foreach ($produits as $index => $produit) {
    if ($reference == $index) {
        $quantiteRecue = readline("Saisir une quantité reçue : ");
        $referenceCorrecte = true;
        $produits[$index]['Stock'] += $quantiteRecue;
        break;
    }
}
if ($referenceCorrecte) {
    echo "La quantité a bien été mise à jour ! \n";
} else {
    echo "La référence n'existe pas ! \n";
}

$stock = 0;
$produitsReappro = [];

foreach ($produits as $index => $produit) {
    echo "$index : {$produit['Désignation']} \n";
    $stock += round(($produit['Stock']) * ($produit['Prix']), 2);
    if ($produit['Stock'] < 7) {
        $produitsReappro[] = $index;
    }
}
echo "La valeur du stock est de $stock \n";
print_r($produitsReappro);