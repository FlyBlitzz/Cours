<?php

function lireCodeUtilisateur($message): string
{
    while (true) {
        $code = readline($message);

        if (strlen($code) === 5) {
            $lettres = substr($code, 0, 3);
            $chiffres = substr($code, 3, 2);

            if (ctype_alpha($lettres) && ctype_digit($chiffres)) {
                return $code;
            }
        }

        echo "Erreur : format invalide.\n";
    }
}

$code = lireCodeUtilisateur("Saisir un code utilisateur (AAA99) : ");
echo "Code valide : $code\n";