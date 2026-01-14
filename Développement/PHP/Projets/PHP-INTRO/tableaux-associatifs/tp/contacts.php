<?php

$contacts = [
    "Dupond" => "06.35.26.35.12",
    "Martin" => "07.48.45.12.89",
    "Durand" => "04.41.89.26.12",
    "Petit" => "03.18.12.59.13",
];

$saisi = readline("Saisir un nom : ");
$saisi = strtolower($saisi);

$trouver = false;
foreach ($contacts as $nom => $numero) {
    if ($saisi == $nom) {
        echo $numero;
        $trouver = true;
        break;
    }
}

if (!$trouver) {
    echo "Le contact $saisi est introuveable";
}