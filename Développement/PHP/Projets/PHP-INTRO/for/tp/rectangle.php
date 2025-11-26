<?php
$largeur = (int) readline("Largeur du rectangle : ");
$hauteur = (int) readline("Hauteur du rectangle : ");

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>