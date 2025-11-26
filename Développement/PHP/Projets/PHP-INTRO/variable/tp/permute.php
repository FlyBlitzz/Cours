<?php
$nombre1 = readline("Saisir un nombre (nombre1) : ");
$nombre2 = readline("Saisir un nombre (nombre2) : ");
$temp;

$temp = $nombre1;
$nombre1 = $nombre2;
$nombre2 = $temp;

echo "nombre1 est égal à " . $nombre1 . ", nombre2 est égal à " . $nombre2;

?>