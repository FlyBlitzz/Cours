<?php

// Déclaration d'un tableau associatif
$personnes = [
    "dupond" => 29,
    "martin" => 24,
    "durand" => 42
];
// Afficher l'age de martin
echo $personnes["martin"];
echo PHP_EOL;

// Parcourir le tableau pour afficher les ages
foreach ($personnes as $age) {
    echo "$age ";
}
echo PHP_EOL;

// Parcourir le tableau pour afficher les noms/ages
foreach ($personnes as $nom => $age) {
    echo "$nom a $age ans \n";
}

// Afficher le nom de toutes les personnes
$noms = array_keys($personnes);
// Afficher cette liste
print_r($noms);

// Afficher le nom de la personne la "plus vieille"
// Version avec foreach
$ageMax = 0;
$nomPlusVieux = "";
foreach ($personnes as $nom => $age) {
    if ($age > $ageMax) {
        $ageMax = $age;
        $nomPlusVieux = $nom;
    }
}
echo "La personne la plus âgés $nomPlusVieux \n";

$max = max($personnes);
$personneMax = array_search($max, $personnes);
echo $personneMax;