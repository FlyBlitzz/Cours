<?php

// Chargement des données et de la fonction
require_once __DIR__ . '/../src/bd_data.php';
require_once __DIR__ . '/../src/requetes/categories.php';

// Appel de la fonction
$resultat = getCategories($categories);

// Affichage du résultat
print_r($resultat);
