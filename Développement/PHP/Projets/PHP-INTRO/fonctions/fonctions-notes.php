<?php

// Fonction qui calcule la moyenne des notes
// tableau -> une valeur unique (float, int, bool) : reduce
function calculerMoyenne(array $tabNotes): float
{
    $somme = 0;
    foreach ($tabNotes as $note) {
        $somme += $note;
    }
    return round($somme / count($tabNotes), 2);
}

//Fonction qui retourne uniquement les notes >= 10
// tableau1 -> tableau2 (condition) : filtre
function getNotesSupMoyenne(array $tabNotes): array
{
    $tableau = [];
    foreach ($tabNotes as $note) {
        if ($note >= 10) {
            // Ajouter la note dans $tableau
            $tableau[] = $note;
        }
    }
    return $tableau;
}
