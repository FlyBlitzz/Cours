<?php

function lireEntierDansIntervalle(string $message, int $min, int $max): int
{
    while (true) {
        $saisie = readline($message);
        $entier = (int) $saisie;

        if ($saisie === "" || !is_numeric($saisie)) {
            echo "Erreur : veuillez saisir un nombre entier.\n";
            continue;
        }

        if ($entier < $min || $entier > $max) {
            echo "Erreur : la valeur doit être comprise entre $min et $max.\n";
            continue;
        }

        return $entier;
    }
}

// Appel de la fonction (implémentation à écrire)
$note = lireEntierDansIntervalle("Saisir une note (0 à 20) : ", 0, 20);

// Exploitation de la valeur retournée
echo "Note valide : $note\n";