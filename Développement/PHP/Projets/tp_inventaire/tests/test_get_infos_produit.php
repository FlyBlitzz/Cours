<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n [RUN] Test : getInfosProduit \n";

//Test avec un ID qui existe
$resultats = getInfosProduit($inventaire, 5);

if ($resultats != null && $resultats["id"] === 5) {
    echo "✅ SUCCES ! \n";
    print_r($resultats);
} else {
    echo "❌ ECHEC !";
    print_r($resultats);
}

//Test avec un ID qui n'existe pas
$resultats = getInfosProduit($inventaire, 99);

if ($resultats === null) {
    echo "✅ SUCCES ! \n";
    print_r($resultats);
} else {
    echo "❌ ECHEC !";
    print_r($resultats);
}