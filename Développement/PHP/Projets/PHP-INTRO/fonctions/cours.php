<?php

// Définir une fonction qui affiche "Bonjour"
function direBonjour(): void
{
    echo "Bonjour \n";
}
direBonjour();

// Appeler/Utiliser la fonction

$prenom = "Nathanaël";
function direBonjour2(): void
{
    global $prenom;
    echo "Bonjour $prenom \n";
}

direBonjour2();
// echo $prenom;
//direBonjour2("Pierre");

// Fonction qui additionne 2 nombres et retourne le résultat
function additionner(int $a, int $b): int
{
    return $a + $b;
}

// Appel à la fonction additionner
$somme = additionner(12, 4);
echo "La somme est égale à $somme \n";
echo "La somme est égale à " . additionner(12, 5);
