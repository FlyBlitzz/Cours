<?php
// Variante : Utilisation du modulo pour vérifier la parité

$nombreMax = (int) readline("Entrez le nombre maximal : ");

echo "Nombres pairs entre 0 et $nombreMax (avec modulo) : \n";

for ($i = 0; $i <= $nombreMax; $i++) {
    // Si le reste de la division par 2 est égal à 0, le nombre est pair
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "\n";
