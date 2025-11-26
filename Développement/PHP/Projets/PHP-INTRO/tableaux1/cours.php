<?php

// Les tableaux en PHP

// Déclaration et initialisation d'un tableau contenant des notes
$notes = [10, 12, 9];
// Accès (afficher) à la note 12
echo $notes[1];
echo PHP_EOL;
// Affichage des valeurs du tableau (parcours du tableau)
// avec une boucle for
for ($i = 0; $i < count($notes); $i++) {
    echo $notes[$i];
}
echo PHP_EOL;
// Affichage des valeurs du tableau
// avec une boucle foreach
foreach ($notes as $note) {
    echo $note;
}

// Affichage des valeurs du tableau
echo PHP_EOL;
print_r($notes);
echo PHP_EOL;

foreach ($notes as $index => $note) {
    echo "$index : $note \n";
}

// Exercice 1
// Calculer et afficher la somme des notes
$somme = 0;
foreach ($notes as $note) {
    $somme += $note;
}
echo $somme;
// Ajout d'une note dans le tableau
$notes[] = 12;
print_r($notes);
array_push($notes, 12, 15, 17, 18);
print_r($notes);
// Modification d'une note dans le tableau
$notes[1] = 14;
print_r($notes);