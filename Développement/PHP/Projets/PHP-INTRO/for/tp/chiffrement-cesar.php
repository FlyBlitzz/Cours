<?php
$texte = readline("Entrez une chaîne de caractères : ");
$decalage = readline("Entrez le décalage (nombre entier) : ");
$resultat = "";

for ($i = 0; $i < strlen($texte); $i++) {
    $caractère = $texte[$i];

    if (ctype_upper($caractère)) {
        $resultat .= chr((ord($caractère) - 65 + $decalage) % 26 + 65);
    } elseif (ctype_lower($caractère)) {
        $resultat .= chr((ord($caractère) - 97 + $decalage) % 26 + 97);
    } else {
        $resultat .= $caractère;
    }
}

echo "Texte chiffré : $resultat";
?>