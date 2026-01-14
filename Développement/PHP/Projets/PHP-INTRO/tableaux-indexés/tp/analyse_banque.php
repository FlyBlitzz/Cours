<?php

$transactions = [
    "01/03/2024|Solde initial|250.00",
    "02/03/2024|Abonnement Netflix|-15.99",
    "05/03/2024|Virement Salaire|2100.50",
    "05/03/2024|Prélèvement Loyer|-750.00",
    "08/03/2024|Courses Super U|-124.30",
    "10/03/2024|Retrait DAB|-50.00",
    "12/03/2024|Virement CPAM (Remboursement)|35.20",
    "15/03/2024|Facture Electricité|-85.40",
    "20/03/2024|Restaurant Burger King|-22.50",
    "25/03/2024|Vente Vinted|42.00",
    "28/03/2024|Achat Matériel Informatique|-450.99",
    "30/03/2024|Salaire (Avance)|500.00"
];

/**
 * Insère des espaces pour les milliers dans la partie entière (sans number_format)
 * Ex : "1234567" -> "1 234 567"
 */
function groupThousands(string $intPart): string
{
    $len = strlen($intPart);
    if ($len <= 3)
        return $intPart;

    $out = '';
    $count = 0;
    // On parcourt de droite à gauche et insère un espace toutes les 3 chiffres
    for ($i = $len - 1; $i >= 0; $i--) {
        $out = $intPart[$i] . $out;
        $count++;
        if ($count === 3 && $i > 0) {
            $out = ' ' . $out;
            $count = 0;
        }
    }
    return $out;
}

/**
 * Formate un montant en style FR avec signe, virgule et espaces (sans number_format)
 * Ex : 2100.5 -> "+2 100,50 €"
 */
function formatEuro(float $amount): string
{
    $sign = ($amount >= 0) ? '+' : '';
    $abs = abs($amount);

    // Arrondi à 2 décimales, via sprintf (autorisé)
    $formatted = sprintf('%.2f', $abs); // "2100.50"

    // Séparer partie entière et décimales
    $parts = explode('.', $formatted);
    $intPart = $parts[0];
    $decPart = isset($parts[1]) ? $parts[1] : '00';

    // Insérer les espaces dans la partie entière
    $intPartGrouped = groupThousands($intPart);

    // Assembler avec une virgule française
    return $sign . $intPartGrouped . ',' . $decPart . " €";
}

/**
 * Pad du libellé avec des points à droite (sans mb_*)
 * NB: avec des accents, l’alignement peut être légèrement décalé (UTF-8 multi-octets).
 */
function dotPad(string $text, int $width = 45): string
{
    // Tronquer si trop long
    if (strlen($text) > $width) {
        $text = substr($text, 0, $width);
    }
    // Compléter par des points
    $padLen = $width - strlen($text);
    if ($padLen > 0) {
        $text .= str_repeat('.', $padLen);
    }
    return $text;
}

// --- Variables de calcul ---
$solde = 0.0;
$nbCredits = 0;
$nbDebits = 0;

// Pour la plus grosse dépense (montant le plus bas)
$montantMin = 0.0;        // initialisé à 0 (consigne)
$libellePireDepense = ''; // mémorise le libellé

// --- Affichage ---
echo "RELEVÉ DE COMPTE - MARS 2024\n\n";

foreach ($transactions as $ligne) {
    $parts = explode('|', $ligne);
    if (count($parts) !== 3) {
        echo "[LIGNE INVALIDE] $ligne\n";
        continue;
    }

    $date = $parts[0];
    $libelle = $parts[1];
    $montant = (float) $parts[2];

    // Affichage propre
    $libellePad = dotPad($libelle);
    echo "[" . $date . "] " . $libellePad . " :  " . formatEuro($montant) . "\n";

    // Solde
    $solde += $montant;

    // Stats
    if ($montant > 0) {
        $nbCredits++;
    } elseif ($montant < 0) {
        $nbDebits++;
    }

    // Plus grosse dépense (montant le plus bas)
    if ($montant < $montantMin) {
        $montantMin = $montant;
        $libellePireDepense = $libelle;
    }
}

// --- Sorties finales ---
echo "\n📊 STATISTIQUES :\n";
echo "   - Entrées : $nbCredits\n";
echo "   - Sorties : $nbDebits\n";

echo "\n📉 PLUS GROSSE DÉPENSE :\n";
if ($libellePireDepense !== '') {
    echo "   -> $libellePireDepense (" . formatEuro($montantMin) . ")\n";
} else {
    echo "   -> Aucune dépense détectée\n";
}

echo "\n💰 SOLDE FINAL :\n";
// Ici on affiche sans number_format ; on réutilise notre format maison
echo "   " . str_replace('+', '', formatEuro($solde)) . "\n";