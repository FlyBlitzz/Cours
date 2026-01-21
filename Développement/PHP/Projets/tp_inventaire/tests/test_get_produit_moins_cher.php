<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n [RUN] Test : getProduitMoinsCher \n";

$resultats = getProduitMoinsCher($inventaire);

if ($resultats === null) {
    echo "Inventaire vide\n";
} else {
    echo "Produit le moins cher :\n";
    print_r($resultats);
}