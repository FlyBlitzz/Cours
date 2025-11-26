<?php

echo "Bienvenue à la caisse automatique ! \n";
$nom = readline("Entrez votre nom : ");
echo "Bonjour $nom, commençons vos achats. \n";
echo PHP_EOL;
$total = 0;

while ($nom != "") {
    $article = readline("Nom de l’article (ou 'fin' pour terminer) : ");
    if ($article == "fin") {
        break;
    }
    $prix = readline("Prix unitaire (€) : ");
    $quantite = readline("Quantité : ");
    $calcul = $prix * $quantite;
    echo "Le total pour $quantite $article(s) à $prix € est de $calcul €. \n";
    echo PHP_EOL;
    $total = $total + $calcul;
}
echo "\nTotal des achats : $total € \n";
if ($total >= 100) {
    echo "Une réduction de 10 % est appliquée. \n";
    $total *= 0.9;
    echo "Montant après réduction : $total € \n";
} elseif ($total >= 50) {
    echo "Une réduction de 5 % est appliquée. \n";
    $total *= 0.95;
    echo "Montant après réduction : $total € \n";
} else {
    echo "Aucune réduction appliquée \n";
}
echo "Merci $nom pour vos achats. Montant à payer : $total €";