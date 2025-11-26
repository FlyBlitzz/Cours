<?php
// Définition du programme compte-envers.php

echo "Compte à rebours de 50 à 0 par pas de 3 : \n";

// Utilisation de la boucle 'for'
// 1. Initialisation : $i = 50 (Le compte commence à 50)
// 2. Condition : $i >= 0 (Le compte s'arrête une fois que $i est inférieur à 0)
// 3. Décrémentation : $i -= 3 (Diminue $i de 3 à chaque itération)

for ($i = 50; $i >= 0; $i -= 3) {
    echo $i . " "; // Affiche le nombre suivi d'un espace
}

echo "\n"; // Retour à la ligne pour la propreté de la console
