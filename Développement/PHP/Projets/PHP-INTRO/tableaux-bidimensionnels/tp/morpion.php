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
    echo PHP_EOL;
}

echo "Il y a $caseVide case(s) vide(s) \n";
$ligneGagnante = true;

foreach ($grille[0] as $case) {
    if ($case !== "X") {
        $ligneGagnante = false;
        break;
    }
}

if ($ligneGagnante) {
    echo "Victoire de X sur la première ligne ! \n";
} else {
    echo "Pas de victoire de X sur la première ligne. \n";
}