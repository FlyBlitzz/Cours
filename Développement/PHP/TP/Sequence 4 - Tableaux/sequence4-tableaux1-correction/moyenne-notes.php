<?php

// Les notes de l'étudiant
$notes = [10, 12.5, 14, 7, 15, 9.5, 8];

// --- Partie 1 : Calcul de la Moyenne (Reprise de l'exercice 1) ---

if (!empty($notes)) {

    $sommeNotes = 0;

    // 1. Calcul de la somme via foreach
    foreach ($notes as $note) {
        $sommeNotes += $note;
    }

    $nombreDeNotes = count($notes);

    // 2. Calcul de la moyenne
    $moyenne = $sommeNotes / $nombreDeNotes;

    // 3. Affichage des résultats intermédiaires
    echo "--- Calcul de la Moyenne et Appréciation ---\n";
    echo "Moyenne calculée : " . number_format($moyenne, 2) . "\n";

    // --- Partie 2 : Attribution de l'Appréciation ---

    $appreciation = "";

    // On utilise la structure if/elseif/else pour tester les différentes conditions.
    // Il est crucial de commencer par la condition la plus haute ou la plus basse
    // pour que les conditions ne se chevauchent pas de manière incorrecte.

    if ($moyenne >= 16) {
        $appreciation = "Mention très bien";
    }
    // La condition suivante n'est testée que si la moyenne est < 16
    elseif ($moyenne >= 14) {
        $appreciation = "Mention bien";
    }
    // La condition suivante n'est testée que si la moyenne est < 14
    elseif ($moyenne >= 12) {
        $appreciation = "Mention assez bien";
    }
    // La condition suivante n'est testée que si la moyenne est < 12
    elseif ($moyenne >= 10) {
        $appreciation = "Mention passable";
    }
    // Si toutes les conditions ci-dessus sont fausses, la moyenne est obligatoirement < 10
    else {
        $appreciation = "Vous n'avez pas votre diplôme";
    }

    // 4. Affichage de l'appréciation finale
    echo "Appréciation de l'examen : " . $appreciation . "\n";
} else {

    // Cas où le tableau est vide (sécurité contre la division par zéro)
    echo "--- Erreur de Calcul ---\n";
    echo "Le tableau de notes est vide. Aucune appréciation ne peut être attribuée.\n";
}
