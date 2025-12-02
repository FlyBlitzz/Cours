<?php

// 1. Tableaux de stockage
$notesSaisies = [];         // Stocke TOUTES les notes valides (entre 0 et 20)
$notesSupDix = [];          // Nouveau tableau : Stocke uniquement les notes >= 10

echo "--- Démarrage de la Saisie de Notes ---\n";
echo "Saisissez 'q' pour arrêter l'opération.\n\n";

// 2. Pré-lecture de la première saisie (Prime the loop)
$saisie = readline("Saisir une note (q pour arrêter) : ");
$saisieNettoyee = strtolower(trim($saisie));

// 3. Boucle de saisie while avec condition explicite
while ($saisieNettoyee !== 'q') {

    // a) Validation numérique
    if (is_numeric($saisieNettoyee)) {

        $note = floatval($saisieNettoyee);

        // b) Validation de la plage [0, 20]
        if ($note >= 0 && $note <= 20) {

            // La note est valide et est stockée dans la liste complète
            $notesSaisies[] = $note;
            echo " -> Note " . $note . " ajoutée à la liste complète.\n";

            // c) Vérification de la condition de filtrage (Note >= 10)
            if ($note >= 10) {
                // Si la note >= 10, on l'ajoute dans le tableau dédié au filtrage
                $notesSupDix[] = $note;
                echo " -> Note filtrée (>= 10) ajoutée au calcul de moyenne.\n";
            }
        } else {
            echo "ATTENTION : La note saisie est incorrecte (doit être entre 0 et 20).\n";
        }
    } else {
        echo "ATTENTION : La saisie doit être un nombre ou 'q'.\n";
    }

    // 4. Lecture de la prochaine saisie
    $saisie = readline("Saisir une note (q pour arrêter) : ");
    $saisieNettoyee = strtolower(trim($saisie));
}

// 5. Affichage des résultats de la saisie globale
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

// 6. Calcul et affichage de la moyenne des notes filtrées
echo "\n--- Traitement des Notes Filtrées (>= 10) ---\n";

// Sécurité : Vérifier que le tableau filtré n'est pas vide pour éviter la division par zéro
if ($nombreNotesFiltrees > 0) {

    // Calculer la somme des notes filtrées (Réutilisation de l'algorithme de l'Exercice 1)
    $sommeNotesFiltrees = 0;
    foreach ($notesSupDix as $noteFiltree) {
        $sommeNotesFiltrees += $noteFiltree;
    }

    // Calcul de la moyenne
    $moyenneFiltree = $sommeNotesFiltrees / $nombreNotesFiltrees;

    echo "La moyenne des notes supérieures ou égales à 10 est : " . number_format($moyenneFiltree, 2) . "\n";
} else {
    // Cas où aucune note n'atteint le seuil de 10
    echo "Il n'y a aucune note supérieure ou égale à 10 dans votre saisie.\n";
}