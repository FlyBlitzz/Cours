<?php
// Créer une variable contenant un prénom
$prenom="Nathanaël";
echo $prenom;
echo "\n";
// Modification de la variable $prenom
$prenom="Dimitri";
echo $prenom;
echo "\n";
// Concaténation de chaines
echo "Bonjour, je m'appelle ".$prenom;
//Interpolation de chaines
echo "\n";
echo "Bonjour, je m'appelle $prenom";
$bonjourPrenom="Bonjour $prenom";
echo "\n";
echo $bonjourPrenom;
//Exemple 1
echo "\n";
$nom="Nathanaël";
$ville="Besançon";
//Interpolation
echo "Mon nom est $nom et je vis à $ville";
echo "\n";
//Concaténation
echo "Mon nom est ".$nom." et je vis à ".$ville;
//Exemple 2 : Afficher $nom en majuscule
echo "\n";
echo strtoupper($nom);
echo "\n";

?> 