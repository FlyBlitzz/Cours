<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n [RUN] Test : calculerValeurTotale \n";
$resultats = calculerValeurTotale($inventaire);

if ($resultats === 5290.0) {
    echo "✅ SUCCES ! \n";
    print_r($resultats);
} else {
    echo "❌ ECHEC !";
}