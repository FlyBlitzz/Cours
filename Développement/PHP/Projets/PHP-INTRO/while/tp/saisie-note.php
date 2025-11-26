<?php
$saisi = (float) readline("Saisir une note : ");

while ($saisi < 0 || $saisi > 20) {
    echo "La note saisie doit être comprise entre 0 et 20 ! \n";
    $saisi = (float) readline("Saisir une note : ");
}
echo "La note saisie est correcte !";