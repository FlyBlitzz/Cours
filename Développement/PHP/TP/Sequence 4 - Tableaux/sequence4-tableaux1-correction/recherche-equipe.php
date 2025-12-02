<?php

// 1. Déclaration du tableau des équipes présentes
// C'est notre "base de données"
$equipesPresentes = ['France', 'Brésil', 'Argentine', 'Espagne', 'Sénégal', 'Australie', 'Belgique'];

// 2. Saisie de l'équipe par l'utilisateur
// La fonction 'readline' est utilisée pour simuler la saisie utilisateur en ligne de commande.
$recherche = readline("Saisissez le nom d'une équipe à rechercher : ");

// Nettoyer la saisie :
// 1. Enlève les espaces inutiles au début/fin (trim)
$equipeRecherchee = trim($recherche);

// 3. Initialisation des variables de contrôle
$trouve = false; // Drapeau (flag) qui passe à true si l'équipe est trouvée

// 4. Parcours du tableau et recherche
echo "\n--- Recherche de '" . $equipeRecherchee . "' ---\n";

// On parcourt le tableau pour comparer chaque équipe à la saisie utilisateur.
foreach ($equipesPresentes as $equipe) {
    // Comparaison : On rend aussi l'équipe du tableau insensible à la casse pour une recherche plus tolérante.
    if (strtolower($equipe) === strtolower($equipeRecherchee)) {
        $trouve = true; // L'équipe a été trouvée, on lève le drapeau.
        break;          // On arrête immédiatement la boucle (optimisation : pas besoin de chercher plus loin).
    }
}

// 5. Affichage du résultat
if ($trouve) {
    echo "RÉSULTAT : L'équipe '" . $equipeRecherchee . "' EST présente à la coupe du monde.\n";
} else {
    echo "RÉSULTAT : L'équipe '" . $equipeRecherchee . "' n'est PAS présente à la liste fournie.\n";
}
