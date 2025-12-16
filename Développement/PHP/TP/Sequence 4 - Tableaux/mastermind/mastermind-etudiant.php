<?php

// ===================================================================================
// 1. BLOC DE CONFIGURATION ET D'INITIALISATION
// ===================================================================================

// Définition des constantes pour la configuration du jeu
const LONGUEUR_CODE = 4;
const MAX_TENTATIVES = 12;
$tentativeRéponse = 0;

// Tableaux indexés des couleurs disponibles
// NOTE: Les deux tableaux doivent avoir le même ordre pour maintenir la correspondance !
$initialesCouleurs = ['R', 'V', 'B', 'J', 'P', 'N']; // Les initiales que le joueur saisit
$emojisCouleurs = ['🔴', '🟢', '🔵', '🟡', '🟣', '⚫']; // Les emojis pour l'affichage
$plateauJeu = [];
// Emojis pour les indices
const CLE_BIEN_PLACE = '🔑';
const PION_MAL_PLACE = '⚪';

echo "
================================================================
           MASTERMIND EN CONSOLE PHP (BTS SIO 1)
================================================================
Objectif : Deviner la combinaison secrète de " . LONGUEUR_CODE . " pions en " . MAX_TENTATIVES . " tentatives maximum.
Couleurs disponibles : ";

// Affichage des options de couleur pour le joueur

foreach ($initialesCouleurs as $index => $valeur) {
    echo $emojisCouleurs[$index] . " (" . $initialesCouleurs[$index] . ") ";
}
echo PHP_EOL;
echo "================================================================\n";

// ===================================================================================
// 2. GÉNÉRATION DE LA COMBINAISON SECRÈTE
// ===================================================================================

$combinaisonSecrete = [];
for ($i = 0; $i < LONGUEUR_CODE; $i++) {
    $indexAléatoire = array_rand($initialesCouleurs);
    $combinaisonSecrete[] = $initialesCouleurs[$indexAléatoire];
}


// ===================================================================================
// 3. BOUCLE PRINCIPALE DU JEU
// ===================================================================================

$victoire = false;

// La boucle tourne tant que le joueur n'a pas gagné ET que le nombre max de tentatives n'est pas atteint
for ($tentative = 1; $tentative <= MAX_TENTATIVES; $tentative++) {
    echo "\n--- Tentative $tentative / " . MAX_TENTATIVES . " ---\n";

    // -------------------------------------------------------------------------------
    // 3.1. BLOC DE SAISIE ET VALIDATION
    // -------------------------------------------------------------------------------

    $proposition = [];
    $valide = false;

    while (!$valide) {
        $saisie = readline("Entrez votre proposition (" . LONGUEUR_CODE . " initiales, ex: RVBJ) : ");

        $saisie = strtoupper($saisie);
        $saisie = str_replace(' ', '', $saisie);

        if (strlen($saisie) <> LONGUEUR_CODE) {
            echo "Erreur : La proposition doit contenir exactement " . LONGUEUR_CODE . " caractères.\n";
            continue;
        }
        $caracteresValides = true;
        $proposition = str_split($saisie);

        foreach ($proposition as $caractere) {
            if (!in_array($caractere, $initialesCouleurs)) {
                echo "Erreur : Le caractère '$caractere' n'est pas une initiale de couleur valide.\n";
                $caracteresValides = false;
                break;
            }
            continue;
        }
        if ($caracteresValides == true) {
            $valide = true;
        }
    }

    // -------------------------------------------------------------------------------
    // 3.2. BLOC D'ANALYSE (ALGORITHME MASTERMIND)
    // -------------------------------------------------------------------------------

    $bienPlace = 0;
    $malPlace = 0;

    // On sauvegarde la proposition pour l'affichage (elle sera modifiée pendant les calculs)
    $propositionAffichage = $proposition;

    // On fait une copie de la combinaison secrète pour pouvoir marquer (mettre à null) les pions
    // qui ont déjà été utilisés sans modifier l'original, ce qui permet de respecter
    // la règle du compte unique de Mastermind.
    // NOTE: $proposition peut être modifiée directement car elle est réinitialisée à chaque tentative.
    $secreteTravail = $combinaisonSecrete;

    // ÉTAPE 1 : CALCUL DES BIEN PLACÉ (Clés Noires 🔑)
    // On utilise un simple "for" pour comparer position par position.

    for ($i = 0; $i < LONGUEUR_CODE; $i++) {
        if ($proposition[$i] == $secreteTravail[$i]) {
            $bienPlace++;
            $secreteTravail[$i] = null;
            $proposition[$i] = null;
        }
    }

    // ÉTAPE 2 : CALCUL DES MAL PLACÉ (Pions Blancs ⚪)
    // On compare les éléments non NULL restants.

    foreach ($proposition as $couleurProp) {
        if ($couleurProp !== null) {
            $indexTrouve = array_search($couleurProp, $secreteTravail);
            if ($indexTrouve !== false) {
                $malPlace++;
                $secreteTravail[$indexTrouve] = null;
            }
        }
    }


    // -------------------------------------------------------------------------------
    // 3.3. BLOC D'AFFICHAGE ET GESTION DE LA FIN DE PARTIE
    // -------------------------------------------------------------------------------

    // Affichage de la proposition du joueur en emojis


    $affichageProposition = "";
    foreach ($propositionAffichage as $initiale) {
        $index = array_search($initiale, $initialesCouleurs);
        $affichageProposition = $affichageProposition . $emojisCouleurs[$index] . " ";
    }

    // Affichage des indices
    $affichageIndices = "";
    for ($i = 1; $i <= $bienPlace; $i++) {
        $affichageIndices = $affichageIndices . CLE_BIEN_PLACE . " ";
    }
    for ($i = 1; $i <= $malPlace; $i++) {
        $affichageIndices = $affichageIndices . PION_MAL_PLACE . " ";
    }

    echo "---Plateau de jeu---", PHP_EOL, "------------------------------", PHP_EOL;
    $tentativeRéponse++;
    array_push($plateauJeu, $tentativeRéponse, ". ");
    array_push($plateauJeu, $affichageProposition);
    array_push($plateauJeu, " |  ");
    array_push($plateauJeu, $affichageIndices);
    array_push($plateauJeu, " ");
    foreach ($plateauJeu as $plateauDeJeu) {
        echo $plateauDeJeu;
        if ($plateauDeJeu == " ") {
            echo PHP_EOL;
        }
    }
    echo "------------------------------";


    if ($bienPlace === LONGUEUR_CODE) {
        $victoire = true;
        break;
    }

} // Fin de la boucle principale

// ===================================================================================
// 4. BLOC DE RÉSULTAT FINAL
// ===================================================================================

// Affichage de la combinaison secrète à la fin (Victoire ou Défaite)


$affichageSecrete = "";
foreach ($combinaisonSecrete as $initiale) {
    $index = array_search($initiale, $initialesCouleurs);
    $affichageSecrete = $affichageSecrete . $emojisCouleurs[$index] . " ";
}

echo "\n================================================================\n";
if ($victoire == true) {
    echo "🎉 FÉLICITATIONS ! Vous avez trouvé la combinaison secrète en $tentative tentatives !\n";
} else {
    echo "😭 DOMMAGE ! Vous avez atteint la limite de " . MAX_TENTATIVES . " tentatives.\n";
}
echo "La combinaison secrète était : $affichageSecrete\n";
echo "================================================================\n";