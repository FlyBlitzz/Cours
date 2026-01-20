<?php

// Chargement des données et de la fonction
require_once __DIR__ . '/../src/bd_data.php';
require_once __DIR__ . '/../src/requetes/films.php';

// Appel de la fonction
$resultat = getFilmById($films, 1);

// Affichage du résultat
print_r($resultat);
