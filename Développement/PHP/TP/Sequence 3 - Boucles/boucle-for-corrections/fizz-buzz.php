<?php
// Définition du programme fizz-buzz.php

echo "Lancement du FizzBuzz de 1 à 30 : \n";

// Utilisation de la boucle 'for' pour itérer de 1 à 30.
// $i++ est une forme courte de $i = $i + 1 (post-incrémentation) [cite: 139]
for ($i = 1; $i <= 30; $i++) {

    // 1. Tester la condition la plus restrictive en premier : Multiple de 15
    if ($i % 15 == 0) {
        echo "FizzBuzz ";
    }
    // 2. Tester le multiple de 3
    elseif ($i % 3 == 0) {
        echo "Fizz ";
    }
    // 3. Tester le multiple de 5
    elseif ($i % 5 == 0) {
        echo "Buzz ";
    }
    // 4. Si aucune des conditions n'est vraie, afficher le nombre lui-même
    else {
        echo $i . " ";
    }
}

echo "\n";
