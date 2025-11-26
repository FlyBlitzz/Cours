<?php
$tailleGrille = 10;

$mur1X = 2;
$mur1Y = 2;
$mur2X = 2;
$mur2Y = 3;
$mur3X = 2;
$mur3Y = 4;
$mur4X = 6;
$mur4Y = 6;
$mur5X = 7;
$mur5Y = 6;

$joueurX = 0;
$joueurY = 0;
$tresorX = 0;
$tresorY = 0;

$positionValide = false;
while ($positionValide == false) {
    $joueurX = rand(0, $tailleGrille - 1);
    $joueurY = rand(0, $tailleGrille - 1);
    $positionValide = true;

    if (
        ($joueurX == $mur1X && $joueurY == $mur1Y) ||
        ($joueurX == $mur2X && $joueurY == $mur2Y) ||
        ($joueurX == $mur3X && $joueurY == $mur3Y) ||
        ($joueurX == $mur4X && $joueurY == $mur4Y) ||
        ($joueurX == $mur5X && $joueurY == $mur5Y)
    ) {
        $positionValide = false;
    }
}

$positionValide = false;
while ($positionValide == false) {
    $tresorX = rand(0, $tailleGrille - 1);
    $tresorY = rand(0, $tailleGrille - 1);
    $positionValide = true;

    if (
        ($tresorX == $mur1X && $tresorY == $mur1Y) ||
        ($tresorX == $mur2X && $tresorY == $mur2Y) ||
        ($tresorX == $mur3X && $tresorY == $mur3Y) ||
        ($tresorX == $mur4X && $tresorY == $mur4Y) ||
        ($tresorX == $mur5X && $tresorY == $mur5Y) ||
        ($tresorX == $joueurX && $tresorY == $joueurY)
    ) {
        $positionValide = false;
    }
}

echo "==================================
     AFFICHAGE DE LA GRILLE
==================================\n";

for ($i = 0; $i < $tailleGrille; $i++) {
    for ($j = 0; $j < $tailleGrille; $j++) {
        if ($j == $joueurX && $i == $joueurY) {
            echo "P ";
        } elseif ($j == $tresorX && $i == $tresorY) {
            echo "T ";
        } elseif (
            ($j == $mur1X && $i == $mur1Y) ||
            ($j == $mur2X && $i == $mur2Y) ||
            ($j == $mur3X && $i == $mur3Y) ||
            ($j == $mur4X && $i == $mur4Y) ||
            ($j == $mur5X && $i == $mur5Y)
        ) {
            echo "# ";
        } else {
            echo ". ";
        }
    }
    echo PHP_EOL;
}

echo "\nLégende : P = Joueur, T = Trésor, # = Mur, . = Case vide";