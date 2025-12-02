<?php

// 1. Déclaration du tableau pour stocker les notes
$notesSaisies = [];
$saisieNettoyee = '';

echo "--- Démarrage de la Saisie de Notes (entre 0 et 20) ---\n";
echo "Saisissez 'q' (ou 'Q') pour arrêter l'opération.\n\n";

// 2. Pré-lecture de la première saisie (Prime the loop)
// On lit la première valeur AVANT d'entrer dans la boucle pour initialiser la condition.
$saisie = readline("Saisir une note (q pour arrêter) : ");
$saisieNettoyee = strtolower(trim($saisie));

// 3. Boucle de saisie while avec condition explicite
// La boucle continue TANT QUE la saisie n'est pas "q".
while ($saisieNettoyee !== 'q') {

    // 4. Validation de la note saisie

    // a) Vérifier si la saisie est bien un nombre
    if (!is_numeric($saisieNettoyee)) {
        echo "ATTENTION : La saisie doit être un nombre.\n";
    } else {

        // Convertir la saisie en nombre flottant (float)
        $note = floatval($saisieNettoyee);

        // b) Vérifier si elle est dans la plage [0, 20]
        if ($note >= 0 && $note <= 20) {

            // La note est valide : on l'ajoute à la fin du tableau
            $notesSaisies[] = $note;
            echo " -> Note " . $note . " ajoutée.\n";
        } else {

            // Note numérique mais hors plage
            echo "ATTENTION : La note saisie est incorrecte (doit être entre 0 et 20).\n";
        }
    }

    // 5. Lecture de la prochaine saisie (mise à jour de la condition pour la prochaine itération)
    $saisie = readline("Saisir une note (q pour arrêter) : ");
    $saisieNettoyee = strtolower(trim($saisie));
} // Fin du while ($saisieNettoyee !== 'q')

// 6. Affichage des résultats
$nombreTotalDeNotes = count($notesSaisies);

echo "\n--- Fin de la Saisie ---\n";
echo "Vous avez saisi " . $nombreTotalDeNotes . " notes.\n";

// Affichage de la liste des notes saisies
if ($nombreTotalDeNotes > 0) {
    echo "Les notes saisies sont : ";
    foreach ($notesSaisies as $note) {
        echo $note . " ";
    }
    echo "\n";
} else {
    echo "Aucune note valide n'a été saisie.\n";
}
