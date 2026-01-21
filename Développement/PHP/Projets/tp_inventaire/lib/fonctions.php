<?php

// La logique métier

// Mission 1
// Extraire tous les noms des produits dont le prix est inférieur ou égal à un prix seuil
function getProduitsAbordables(array $tabInventaire, int $prixSeuil): array
{
    $nomsProduits = [];

    // Parcours du tableau
    foreach ($tabInventaire as $produit) {
        if ($produit["prix_unitaire"] <= $prixSeuil) {
            // Ajoute le nom du produit dans $nomPorduits
            $nomsProduits[] = $produit["designation"];
        }
    }
    return $nomsProduits;
}

// Mission 2
function calculerValeurTotale(array $tabInventaire): float
{
    $stock = 0;

    foreach ($tabInventaire as $produit) {
        $stock += round(($produit["quantite"]) * ($produit["prix_unitaire"]), 2);
    }
    return $stock;
}

// Mission 3
function getInfosProduit(array $table, int $idCherche): ?array
{
    foreach ($table as $produit) {
        if ($produit["id"] == $idCherche) {
            return $produit;
        }
    }
    return null;
}

// Mission 4
function getProduitMoinsCher(array $table): ?array
{
    if (empty($table))
        return null;

    $moinsCher = $table[0];
    $prixMin = $table[0]['prix_unitaire'];

    foreach ($table as $produit) {
        $prix = $produit['prix_unitaire'];
        if ($prix < $prixMin) {
            $prixMin = $prix;
            $moinsCher = $produit;
        }
    }

    foreach ($moinsCher as $colonne) {
        echo $colonne . " ";
    }

    return $moinsCher;
}

// Mission 5
function appliquerRemise(array $table, float $pourcentage): array
{
    $remise = $pourcentage / 100;
    $nouveauTableau = [];

    foreach ($table as $produit) {
        $produitModifie = $produit;
        $ancienPrix = $produit["prix_unitaire"];
        $nouveauPrix = $ancienPrix - ($ancienPrix * $remise);
        $produitModifie["prix_unitaire"] = $nouveauPrix;
        $nouveauTableau[] = $produitModifie;
    }
    return $nouveauTableau;
}