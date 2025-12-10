<?php
// =============================================
// DONNÉES BRUTES (LOGS DU 01/12/2023)
// =============================================

// Liste des codes HTTP renvoyés par le serveur
$httpCodes = [
    200,
    200,
    500,
    200,
    200,
    404,
    200,
    500,
    500,
    200,
    200,
    200,
    404,
    200,
    200
];

// Liste des temps de réponse correspondants (en ms)
// L'index 0 de $responseTimes correspond à l'index 0 de $httpCodes, etc.
$responseTimes = [
    120,
    45,
    1500,
    600,
    120,
    40,
    2500,
    300,
    800,
    95,
    110,
    450,
    20,
    3500,
    150
];

$total = count($httpCodes);

echo "========================================\n";
echo "      RAPPORT DE MONITORING (CORRECTION)\n";
echo "========================================\n\n";

echo "[INFO] Nombre de logs analysés : $total\n\n";

echo "--- 1. HISTORIQUE DES REQUÊTES ---\n";
for ($i = 0; $i < $total; $i++) {
    echo "Requête [$i] : Code {$httpCodes[$i]} | Temps : {$responseTimes[$i]} ms\n";
}
echo "\n";

echo "--- 2. INCIDENT LE PLUS CRITIQUE ---\n";
$maxTime = max($responseTimes);
$indexMax = array_search($maxTime, $responseTimes);
$codeAtMax = $httpCodes[$indexMax];

echo "Temps record   : $maxTime ms\n";
echo "Index concerné : $indexMax\n";
echo "Code HTTP      : $codeAtMax (C'est le code associé à ce temps)\n\n";

echo "--- 3. STATISTIQUES AVANCÉES ---\n";
$nb500 = 0;
foreach ($httpCodes as $code) {
    if ($code === 500) {
        $nb500++;
    }
}
echo "Nombre d'erreurs 500 : $nb500\n";

$sommeValide = 0;
$compteurValide = 0;
for ($i = 0; $i < $total; $i++) {
    if ($httpCodes[$i] === 200) {
        $sommeValide += $responseTimes[$i];
        $compteurValide++;
    }
}
if ($compteurValide > 0) {
    $moyenneValide = $sommeValide / $compteurValide;
    echo "Temps moyen (Succès uniquement) : " . round($moyenneValide) . " ms\n\n";
} else {
    echo "Temps moyen (Succès uniquement) : N/A\n\n";
}

echo "--- 4. ALERTES (Faux Positifs) ---\n";
$nbAlertes = 0;
for ($i = 0; $i < $total; $i++) {
    if ($httpCodes[$i] === 200 && $responseTimes[$i] > 500) {
        echo "⚠ ALERTE : La requête [$i] est valide mais LENTE ({$responseTimes[$i]} ms)\n";
        $nbAlertes++;
    }
}
if ($nbAlertes === 0) {
    echo "Aucune alerte.\n";
}
echo "\n";

echo "--- BONUS : RÉPARTITION ---\n";
$nb200 = 0;
$nb404 = 0;
$nb500 = 0;
foreach ($httpCodes as $code) {
    if ($code === 200)
        $nb200++;
    elseif ($code === 404)
        $nb404++;
    elseif ($code === 500)
        $nb500++;
}
$pourc200 = ($nb200 / $total) * 100;
$pourc404 = ($nb404 / $total) * 100;
$pourc500 = ($nb500 / $total) * 100;

echo "Code HTTP 200 : " . round($pourc200, 1) . " % des requêtes.\n";
echo "Code HTTP 500 : " . round($pourc500, 1) . " % des requêtes.\n";
echo "Code HTTP 404 : " . round($pourc404, 1) . " % des requêtes.\n";

echo "\nFin du rapport.\n";