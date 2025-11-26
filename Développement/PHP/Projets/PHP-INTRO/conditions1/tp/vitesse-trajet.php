<?php
$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$distance = readline("Saisir la distance du trajet (kms) : ");
$duree = readline("Saisir la durée du trajet (h:mm) : ");
$positionSeparateur = strpos($duree,":");
$heures = substr($duree,0,$positionSeparateur);
$minutes = substr($duree,$positionSeparateur+1,2);

if ($minute > 60) {
    exit ($texteRouge . "ERREUR : la durée " . $duree . " est invalide !". $normal);
}
 $dureeMinutes = $heures*60 + $minutes;
 $vitesse = ceil(($distance/$dureeMinutes) * 60);

echo ("La vitesse moyenne du trajet est de " . round($vitesse) . " km/h" . "\n");
if ($vitesse > 90) {
    echo ($fondRouge . "Vous êtes au dessus des 90 km/h" . $normal);
} else {
    echo ($fondVert . "Vous êtes en dessous des 90 km/h" . $normal);
}

?>