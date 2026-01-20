<?php
declare(strict_types=1);

// =====================================================
// GESTION DE NOTES - VERSION "BRUTE" (A REFACTORER)
// Contraintes : tableaux 1D uniquement (pas de 2D)
// =====================================================

echo "========================================\n";
echo "GESTION DE NOTES - BTS SIO (CONSOLE)\n";
echo "========================================\n";

$noms = [];   // tableau 1D : noms des étudiants
$notes = [];  // tableau 1D : notes correspondantes
$nb = 0;

// Saisie du nombre d'étudiants (avec validation)
while (true) {
    $s = trim(readline("Combien d'etudiants ? (1-30) : "));
    if ($s !== '' && ctype_digit($s)) {
        $nb = (int)$s;
        if ($nb >= 1 && $nb <= 30) {
            break;
        }
    }
    echo "Entrée invalide. Merci de saisir un nombre entre 1 et 30.\n";
}

echo "----------------------------------------\n";
echo "SAISIE DES ETUDIANTS\n";
echo "----------------------------------------\n";

for ($i = 0; $i < $nb; $i++) {

    // Saisie du nom
    $nom = '';
    while (true) {
        $nom = trim(readline("Nom etudiant " . ($i + 1) . " : "));
        if ($nom !== '') {
            break;
        }
        echo "Nom invalide. Recommencez.\n";
    }

    // Saisie de la note (0..20, accepte 12.5 ou 12,5)
    $note = -1.0;
    while (true) {
        $snote = trim(readline("Note sur 20 de $nom : "));
        $snote = str_replace(',', '.', $snote);

        if ($snote !== '' && is_numeric($snote)) {
            $note = (float)$snote;
            if ($note >= 0 && $note <= 20) {
                break;
            }
        }
        echo "Note invalide. Saisir un nombre entre 0 et 20.\n";
    }

    $noms[] = $nom;
    $notes[] = $note;

    echo "Ajouté : $nom ($note/20)\n";
    echo "----------------------------------------\n";
}

// Calculs statistiques (moyenne, min, max, admis)
$moyenne = 0.0;
$min = 21.0;
$max = -1.0;
$admis = 0;

for ($i = 0; $i < count($notes); $i++) {
    $moyenne = $moyenne + $notes[$i];

    if ($notes[$i] < $min) {
        $min = $notes[$i];
    }
    if ($notes[$i] > $max) {
        $max = $notes[$i];
    }
    if ($notes[$i] >= 10) {
        $admis = $admis + 1;
    }
}
$moyenne = $moyenne / count($notes);

// Affichage du récapitulatif
echo "========================================\n";
echo "RECAPITULATIF\n";
echo "========================================\n";

for ($i = 0; $i < count($noms); $i++) {
    $nom = $noms[$i];
    $note = $notes[$i];

    $mention = "INSUFFISANT";
    if ($note >= 16) {
        $mention = "TB";
    } elseif ($note >= 14) {
        $mention = "BIEN";
    } elseif ($note >= 12) {
        $mention = "AB";
    } elseif ($note >= 10) {
        $mention = "PASSABLE";
    }

    echo "- $nom : $note/20 ($mention)\n";
}

echo "----------------------------------------\n";
echo "STATISTIQUES\n";
echo "----------------------------------------\n";
echo "Moyenne : " . round($moyenne, 2) . "/20\n";
echo "Min     : $min/20\n";
echo "Max     : $max/20\n";
echo "Admis   : $admis / " . count($noms) . "\n";

// Menu final
echo "========================================\n";
echo "MENU\n";
echo "========================================\n";
echo "1) Afficher uniquement les admis (>=10)\n";
echo "2) Afficher uniquement les non-admis (<10)\n";
echo "3) Quitter\n";

$choix = '';
while (true) {
    $choix = trim(readline("Votre choix (1-3) : "));
    if (in_array($choix, ['1','2','3'], true)) {
        break;
    }
    echo "Choix invalide.\n";
}

if ($choix === '1') {
    echo "----------------------------------------\n";
    echo "LISTE DES ADMIS\n";
    echo "----------------------------------------\n";
    for ($i = 0; $i < count($noms); $i++) {
        if ($notes[$i] >= 10) {
            echo "- " . $noms[$i] . " : " . $notes[$i] . "/20\n";
        }
    }
} elseif ($choix === '2') {
    echo "----------------------------------------\n";
    echo "LISTE DES NON-ADMIS\n";
    echo "----------------------------------------\n";
    for ($i = 0; $i < count($noms); $i++) {
        if ($notes[$i] < 10) {
            echo "- " . $noms[$i] . " : " . $notes[$i] . "/20\n";
        }
    }
} else {
    echo "Au revoir.\n";
}

echo "========================================\n";
echo "FIN DU PROGRAMME\n";
echo "========================================\n";
