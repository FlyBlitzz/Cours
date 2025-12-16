<?php

require_once 'fonctions-notes.php';

// Déclarer un tableau de notes
$notesSIO1 = [10, 12, 8, 9, 15, 17, 3];
$moyenne = calculerMoyenne($notesSIO1);
echo "La moyenne est égale à $moyenne";

// Rechercher les notes >= 10
$notesSupMoyenne = getNotesSupMoyenne($notesSIO1);
echo PHP_EOL;
// Test si il y a des notes
if (count($notesSupMoyenne) == 0) {
    echo "Aucune note >= 10 !";
} else {
    foreach ($notesSupMoyenne as $note) {
        echo "$note ";
    }
}
