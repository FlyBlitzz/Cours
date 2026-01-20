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

    foreach ($tabInventaire as $index => $produit) {
        $stock += round(($produit['quantite']) * ($produit['prix_unitaire']), 2);
    }
    return $stock;
}

// Mission 3
function getInfosProduit(array $table, int $idCherche): ?array
{
    $produitTrouve = [];

    foreach ($table as $index => $produit) {
        if ($produit["id" == $idCherche]) {
            $produitTrouve[] = $index;
            break;
        }
    }
    return $produitTrouve;
}