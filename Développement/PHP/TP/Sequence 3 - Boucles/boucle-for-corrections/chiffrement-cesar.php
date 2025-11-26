<?php
// Définition du programme chiffrement-cesar.php - Version If/Else pour la base

// 1. Demander les données à l'utilisateur
$phrase = readline("Entrez une phrase à chiffrer : ");
$decalage = (int) readline("Entrez le décalage (un nombre entier positif) : ");

// Assurer que le décalage est géré modulo 26
$decalage = $decalage % 26;

$phraseChiffree = "";
$longueurPhrase = strlen($phrase);

for ($i = 0; $i < $longueurPhrase; $i++) {

    $caractere = substr($phrase, $i, 1);
    $caractereChiffre = "";
    $baseAlphabet = 0;

    // Vérifier si le caractère est une lettre
    if (ctype_alpha($caractere)) {

        // Remplacement de la ternaire par un IF/ELSE pour déterminer la base de l'alphabet
        if (ctype_upper($caractere)) {
            // Majuscule : la base est le code ASCII de 'A'
            $baseAlphabet = ord('A');
        } else {
            // Minuscule : la base est le code ASCII de 'a'
            $baseAlphabet = ord('a');
        }

        // Étape 1 : Obtenir la position relative (0 à 25)
        $positionRelative = ord($caractere) - $baseAlphabet;

        // Étape 2 & 3 : Appliquer le décalage et gérer le "wrap-around" (modulo 26)
        $nouvellePosition = ($positionRelative + $decalage) % 26;

        // Étape 4 & 5 : Reconvertir en code ASCII puis en caractère
        $nouveauCodeAscii = $nouvellePosition + $baseAlphabet;
        $caractereChiffre = chr($nouveauCodeAscii);
    }
    // Si ce n'est PAS une lettre (symbole, espace, chiffre, etc.)
    else {
        // Le caractère chiffré est le caractère original
        $caractereChiffre = $caractere;
    }

    // Ajouter le caractère (chiffré ou original) au résultat final
    $phraseChiffree .= $caractereChiffre;
}

// 3. Afficher le résultat
echo "Phrase chiffrée: " . $phraseChiffree . "\n";
