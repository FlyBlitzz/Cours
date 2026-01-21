<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n [RUN] Test : appliquerRemise \n";

$resultats = appliquerRemise($inventaire, 20);

print_r($inventaire);
print_r($resultats);