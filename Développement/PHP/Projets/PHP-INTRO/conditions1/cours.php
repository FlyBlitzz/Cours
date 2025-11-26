<?php
// Exemple 1
$age = readline("Saisir votre age : ");
// Afficher mineur ou majeur
if ($age < 18) {
    echo "Vous êtes mineur";
} else {
    echo "Vous êtes majeur";
}

// Exemple 2
$nombre = readline("Saisir un nombre : ");
// Afficher "nombre pair" ou "nombre impair"
if ($nombre % 2 == 0) {
    echo "Nombre pair !";
} else {
    echo "Nombre impair !";
}

// Exemple 3
$nom = "dupond";
// affiche si la valeur dans $nom commence par un 'd' ou pas
if (str_starts_with($nom,'d')){
    echo "Votre nom commence par un 'd'";
} else {
    echo "Votre nom ne commence pas par un 'd'";
}

?>