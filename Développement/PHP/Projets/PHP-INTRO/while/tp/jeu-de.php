<?php
$scoreJoueur = 0;
$scoreOrdinateur = 0;
echo "==== JEU DU DÉ ====
Atteignez 20 points avant l’ordinateur pour gagner. \n
Score joueur : $scoreJoueur | Score ordinateur : $scoreOrdinateur \n";

while ($scoreJoueur < 20 && $scoreOrdinateur < 20) {
    readline("\nAppuyez sur Entrée pour lancer le dé...");
    $deJoueur = random_int(1, 6);
    $deOrdinateur = random_int(1, 6);
    echo "Vous obtenez : $deJoueur \nL’ordinateur obtient : $deOrdinateur \n";
    $scoreJoueur += $deJoueur;
    $scoreOrdinateur += $deOrdinateur;
    echo "\nNouveau score : \nJoueur : $scoreJoueur | Ordinateur : $scoreOrdinateur \n";
}
echo "\n===========================
 FIN DE PARTIE
=========================== \n";
if ($scoreJoueur < $scoreOrdinateur) {
    echo "\nDommage, vous avez perdu !";
} elseif ($scoreJoueur == $scoreOrdinateur) {
    echo "\nÉgalité parfaite ! Bien joué.";
} else {
    echo "\nBravo, vous avez gagné !";
}