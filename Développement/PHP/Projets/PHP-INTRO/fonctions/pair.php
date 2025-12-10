<?php

require_once 'mes-fonctions.php';

// Appel de la fonction
$nombre = (int) readline("Saisir un nombre : ");
if (estPair($nombre)) {
    echo "Le nombre $nombre est paire !";
} else {
    echo "Le nombre $nombre est impaire !";
}