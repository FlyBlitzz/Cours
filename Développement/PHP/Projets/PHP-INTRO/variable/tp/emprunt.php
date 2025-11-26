<?php
$montant = readline("Saisir le montant à emprunter : ");
$interetAnnuel = readline("Saisir le taux d'intérêt (%) : ");
$duree = readline("Saisir la durée (en année) : ");

$mois = $duree*12;
$interetMensuel = ($interetAnnuel/100)/12;

$numerateur = $montant*$interetMensuel;
$denominateurFormule = 1 - pow(1 + $tauxInteretMensuel,-$nombresMois);
$montantMensualite = round($numerateurFormule / $denominateurFormule,2);
echo "La mensualité à rembourser est de $montantMensualite euros !";

$montantARembourser = $montantMensualite*$nombresMois;
$coutEmprunt = floor($montantARembourser - $montantEmprunte);
echo "Le coût de l'emprunt est de $coutEmprunt euros";

?>