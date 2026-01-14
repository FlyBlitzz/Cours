<?php

$notesSaisies = [];
$notesSupDix = [];

echo "--- Démarrage de la Saisie de Notes ---\n";
echo "Saisissez 'q' pour arrêter l'opération.\n\n";

$saisie = readline("Saisir une note (q pour arrêter) : ");
$saisieNettoyee = strtolower(trim($saisie));

while ($saisieNettoyee !== 'q') {

    if (is_numeric($saisieNettoyee)) {

        $note = floatval($saisieNettoyee);

        if ($note >= 0 && $note <= 20) {

            $notesSaisies[] = $note;
            echo " -> Note " . $note . " ajoutée à la liste complète.\n";

            if ($note >= 10) {
                $notesSupDix[] = $note;
                echo " -> Note filtrée (>= 10) ajoutée au calcul de moyenne.\n";
            }
        } else {
            echo "ATTENTION : La note saisie est incorrecte (doit être entre 0 et 20).\n";
        }
    } else {
        echo "ATTENTION : La saisie doit être un nombre ou 'q'.\n";
    }

    $saisie = readline("Saisir une note (q pour arrêter) : ");
    $saisieNettoyee = strtolower(trim($saisie));
}

$nombreTotalDeNotes = count($notesSaisies);
$nombreNotesFiltrees = count($notesSupDix);

echo "\n--- Résultats ---\n";
echo "Vous avez saisi " . $nombreTotalDeNotes . " notes valides au total.\n";

if ($nombreTotalDeNotes > 0) {
    echo "Les notes saisies sont : ";
    foreach ($notesSaisies as $note) {
        echo $note . " ";
    }
    echo "\n";
}

echo "\n--- Traitement des Notes Filtrées (>= 10) ---\n";

if ($nombreNotesFiltrees > 0) {

    $sommeNotesFiltrees = 0;
    foreach ($notesSupDix as $noteFiltree) {
        $sommeNotesFiltrees += $noteFiltree;
    }

    $moyenneFiltree = $sommeNotesFiltrees / $nombreNotesFiltrees;

    echo "La moyenne des notes supérieures ou égales à 10 est : " . number_format($moyenneFiltree, 2) . "\n";
} else {
    echo "Il n'y a aucune note supérieure ou égale à 10 dans votre saisie.\n";
}