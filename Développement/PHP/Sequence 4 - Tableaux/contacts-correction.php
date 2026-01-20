<?php

$contacts = [
    "dupond" => "06 12 34 56 78",
    "Martin" => "06 98 76 54 32",
    "Durand" => "07 11 22 33 44"
];

// Saisie utilisateur
$nomRecherche = readline("Entrez le nom à rechercher : ");
$nomRecherche = strtolower($nomRecherche);

$numeroTrouve = null;  // null = valeur indéterminé

foreach ($contacts as $nom => $telephone) {
    if ($nomRecherche === strtolower($nom)) {
        $numeroTrouve = $telephone;
        break; // J'ai trouvé ! donc j'arrête de chercher (je sors de la boucle)
    }
}

if ($numeroTrouve !== null) {
    echo "Numéro de téléphone de $nomRecherche : $numeroTrouve" . PHP_EOL;
} else {
    echo "Le contact '$nomRecherche' n'existe pas." . PHP_EOL;
}

// Version simplifiée

// Saisie utilisateur
$nom = readline("Entrez le nom à rechercher : ");

// Vérification de l'existence du contact
if (array_key_exists($nom, $contacts)) {
    echo "Numéro de téléphone de $nom : " . $contacts[$nom] . PHP_EOL;
} else {
    echo "Le contact '$nom' n'existe pas." . PHP_EOL;
}
