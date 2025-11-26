<?php

// Déclarer les données (variables)
$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");

// Ecrire les instructions (agir sur les variables)
//echo "Bonjour $prenom";
echo "Bonjour " . ucfirst(strtolower($prenom)) . " " . strtoupper($nom);

?>