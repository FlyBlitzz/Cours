<?php
$prix = readline("Saisir un prix HT : ");
$taux = readline("Saisir un taux de TVA (en pourcentage) : ");

$tva = ($taux/100)+1;
$resultat = $prix*$tva;

echo "Le prix TTC est de : " . number_format($resultat, 2);

?>