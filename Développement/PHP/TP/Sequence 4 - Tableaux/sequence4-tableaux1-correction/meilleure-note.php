<?php

// 1. Déclaration et initialisation du tableau de notes
$notes = [10, 12.5, 14, 7, 15, 9.5, 8];

// --- Test avec un tableau vide (sécurité) ---
// $notes = [];

// 2. Vérification de l'état du tableau avec empty()
if (!empty($notes)) {

    // 3. Initialisation de la meilleure note
    // On initialise la variable $meilleureNote avec la première note du tableau.
    // C'est notre point de départ pour la comparaison.
    $meilleureNote = $notes[0];

    // 4. Parcours du tableau avec foreach pour trouver la note la plus haute
    echo "--- Recherche de la Meilleure Note ---\n";
    echo "Note initiale (point de départ) : " . $meilleureNote . "\n\n";

    // La boucle itère sur chaque $note du tableau.
    foreach ($notes as $note) {

        // Comparaison : Si la note courante ($note) est strictement supérieure 
        // à la meilleure note trouvée jusqu'à présent ($meilleureNote)...
        if ($note > $meilleureNote) {
            // ... alors cette nouvelle note devient la nouvelle référence (le nouveau maximum).
            $meilleureNote = $note;
        }
    }

    // 5. Affichage du résultat final
    echo "La note la plus haute obtenue est : " . $meilleureNote . "\n";
} else {

    // Cas où le tableau est vide
    echo "--- Erreur de Recherche ---\n";
    echo "Le tableau de notes est vide. Impossible de trouver la meilleure note.\n";
}
