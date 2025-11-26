<?php
$nombre1 = readline("Saisir un nombre entier : ");
$nombre2 = readline("Saisir un nombre entier : ");
$resultat = $nombre1/$nombre2;

echo "Le résultat de la division de " . $nombre1 . " par " . $nombre2 . " est " . number_format($resultat, 2);

?>