<?php
$ca = readline("Saisir le chiffre d'affaires réalisé (en €) : ");
$objectifCa = readline("saisir l'objectif de chiffre d'affaires (en €) : ");
if ($ca < 10000) {
    echo "Pas de prime";
} elseif ($ca >= 10000 and $ca < 20000) {
    $prime = $ca * 0.05;
    echo "Votre prime est de $prime € \n";
} elseif ($ca >= 20000 and $ca < 50000) {
    $prime = $ca * 0.08;
    echo "Votre prime est de $prime € \n";
} else {
    $prime = $ca * 0.1 + 500;
    echo "Votre prime est de $prime € \n";
}
if ($ca > $objectifCa * 1.2) {
    $primeSupp = $ca * 0.02;
    echo "Vous avez une prime supplémentaire de $primeSupp € \n";
}
echo "Vous recevrez donc une prime total de " . $prime + $primeSupp;

?>