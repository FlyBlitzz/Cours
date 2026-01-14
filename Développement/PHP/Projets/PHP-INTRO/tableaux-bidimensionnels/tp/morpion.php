<?php

$grille = [
    ["X", "O", "."],
    ["X", "X", "O"],
    [".", "O", "."],
];

$caseVide = 0;
$compte = 0;

foreach ($grille as $ligne) {
    foreach ($ligne as $valeur) {
        echo "$valeur ";
        if ($valeur == ".") {
            $caseVide++;
        }
    }
    if ($grille[$compte][0] == "X" && $grille[$compte][1] == "X" && $grille[$compte][2] == "X") {
        echo "'X' a gagné";
    }
    echo PHP_EOL;
    $compte++;
}
echo "Il y a $caseVide case(s) vide(s)";