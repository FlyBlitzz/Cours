<?php
// Définition du programme syracuse.php

// 1. Définir le nombre de termes à générer
$nombreDeTermes = 20;

// 2. Demander à l'utilisateur le nombre de départ (N)
// Utilisation de readline() et conversion en entier (int)
$n = (int) readline("Entrez le nombre de départ (N) pour la suite de Syracuse : ");

echo "Les $nombreDeTermes premiers termes de la suite de Syracuse pour N=$n sont : \n";

// 3. Afficher le premier terme (N) avant de commencer la boucle
echo $n . " ";

// 4. Boucle 'for' : On boucle pour générer les 19 termes restants 
// (le premier a déjà été affiché)
for ($compteur = 1; $compteur < $nombreDeTermes; $compteur++) {

    // Vérifier si le nombre actuel ($n) est pair ou impair en utilisant l'opérateur modulo (%)

    // Si $n$ est PAIR (le reste de la division par 2 est 0)
    if ($n % 2 == 0) {
        $n = $n / 2; // Règle 1 : On divise par 2 [cite: 212]
    }
    // Si $n$ est IMPAIR
    else {
        $n = (3 * $n) + 1; // Règle 2 : On multiplie par 3 et on ajoute 1 [cite: 213]
    }

    // Afficher le nouveau terme
    echo $n . " ";
}

echo "\n";
