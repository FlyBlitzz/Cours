<?php

function estPair(int $nombre): bool
{
    return $nombre % 2 == 0;
}

function getIdentite(string $prenom, string $nom): string
{
    $resultat = ucfirst(strtolower($prenom)) . " " . strtoupper($nom);
    return $resultat;
}

function calculerImc(float $taille, float $poids): float
{
    $resultat = round($poids / ($taille * $taille), 2);
    return $resultat;
}