<?php
// Définition du programme rectangle.php

// 1. Demander les dimensions à l'utilisateur
// Utilisation de readline() et conversion en entier (int)
$largeur = (int) readline("Largeur du rectangle : ");
$hauteur = (int) readline("Hauteur du rectangle : ");

echo "\n"; // Ligne vide pour séparer l'entrée de la sortie

// 2. Boucle Externe : Gère la HAUTEUR (les lignes)
for ($ligne = 1; $ligne <= $hauteur; $ligne++) {

    // Variable pour stocker la ligne en cours de construction
    $ligneDeCaractere = "";

    // 3. Boucle Interne : Gère la LARGEUR (les étoiles)
    // Pour chaque ligne, on répète l'affichage des étoiles 'largeur' fois
    for ($colonne = 1; $colonne <= $largeur; $colonne++) {
        $ligneDeCaractere .= "*"; // Ajoute une étoile à la chaîne de caractères
    }

    // 4. Afficher la ligne complète et un retour chariot
    echo $ligneDeCaractere . "\n";
}
