<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n [RUN] Test : getProduitsAbordables \n";
$resultats = getProduitsAbordables($inventaire, 60);

if (count($resultats) === 2) {
    echo "✅ SUCCES ! \n";
    print_r($resultats);
} else {
    echo "❌ ECHEC !";
}