<?php
$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");

echo "Votre adresse email est " . strtolower($prenom) . "." . strtolower($nom) . strlen($nom) . "@societe.com";

?>