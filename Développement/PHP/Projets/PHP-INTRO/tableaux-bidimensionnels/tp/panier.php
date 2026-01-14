<?php

$paniers = [
    ["pomme", "banane", "kiwi"],
    ["poire", "pomme"],
    ["banane", "abricot", "pomme"],
    [],
];

$compteur = 0;

foreach ($paniers as $numero => $ligne) {
    echo "Le panier numéro " . $numero + 1 . " contient : ";
    if ($ligne == []) {
        echo "vide";
    }
    foreach ($ligne as $valeur) {
        echo "$valeur ";
        if ($valeur == "pomme") {
            $compteur++;
        }
    }
    echo PHP_EOL;
}
echo "Il y a $compteur pomme(s) au total";