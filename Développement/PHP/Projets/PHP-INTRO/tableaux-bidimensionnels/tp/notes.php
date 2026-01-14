<?php

$notes = [
    [12, 15, 9],
    [8, 11, 14, 10],
    [17, 13],
];

foreach ($notes as $index => $notesEtudiant) {
    echo "Etudiant " . $index + 1 . " : ";
    $moyenne = 0;
    $nombreNotes = 0;
    foreach ($notesEtudiant as $valeur) {
        echo "$valeur ";
        $moyenne += $valeur;
        $nombreNotes++;
    }
    echo PHP_EOL;
    $moyenne /= $nombreNotes;
    echo "La moyenne est de " . round($moyenne, 2);
    echo PHP_EOL;
}