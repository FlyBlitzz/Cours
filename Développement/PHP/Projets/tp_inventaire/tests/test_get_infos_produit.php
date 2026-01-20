<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n [RUN] Test : calculerValeurTotale \n";
$resultats = getInfosProduit($inventaire, 1);


print_r($resultats);
