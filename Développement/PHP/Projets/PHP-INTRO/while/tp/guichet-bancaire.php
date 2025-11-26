<?php

$nom = readline("Entrez votre nom : ");
echo PHP_EOL;
$code = readline("Entrez votre code secret : ");
echo PHP_EOL;
$solde = 1000;
echo "Bienvenue $nom, votre session est ouverte.

===== MENU BANCAIRE ===== 
1 - Consulter le solde 
2 - Déposer de l’argent 
3 - Retirer de l’argent 
4 - Quitter 
=========================";


$choix = readline("Votre choix : ");
while ($choix <> 4) {
    if ($choix == 1) {
        echo "Votre solde actuel est de $solde €.";
        echo PHP_EOL;
        echo "===== MENU BANCAIRE ===== 
1 - Consulter le solde 
2 - Déposer de l’argent 
3 - Retirer de l’argent 
4 - Quitter 
=========================";
        echo PHP_EOL;
        $choix = readline("Votre choix : ");
    } elseif ($choix == 2) {
        $depot = readline("Montant à déposer : ");
        $solde += $depot;
        echo "Dépôt de $depot € effectué. Nouveau solde : $solde €.";
    } elseif ($choix == 3) {
        $retrait = readline("Montant à retirer : ");
    }
}