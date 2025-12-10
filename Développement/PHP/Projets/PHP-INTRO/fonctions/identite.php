<?php

// Appel de la fonction
$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");
$identite = getIdentite($prenom, $nom);
echo "Votre identité est $identite";
