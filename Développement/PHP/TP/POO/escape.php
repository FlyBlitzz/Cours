<?php

require_once 'vendor/autoload.php';

use App\Salle;
use App\Enigme;
use App\SessionJeu;
use App\BanqueEnigmes;

// Petite fonction compatible Windows/Mac/Linux
function input(string $msg): string {
    echo $msg;
    return trim(fgets(STDIN));
}

// ------------------------------------------------------
// 1. Initialisation
// ------------------------------------------------------

echo "===========================================\n";
echo "      ESCAPETECH - ESCAPE GAME NUMÉRIQUE\n";
echo "===========================================\n\n";

$nomEquipe = input("Nom de votre équipe : >> ");

echo "\nCréation de la salle...\n";

// ------------------------------------------------------
// 2. Création de la salle + énigmes
// ------------------------------------------------------

$salle = new Salle("La Chambre du Codex");

// Création de la banque d'énigmes avec 50 énigmes
$banqueEnigmes = new BanqueEnigmes();

// Sélection aléatoire de 3 énigmes différentes
$enigmesSelectionnees = $banqueEnigmes->selectionnerEnigmesAleatoires(3);

// Ajout des énigmes sélectionnées à la salle
foreach ($enigmesSelectionnees as $enigme) {
    $salle->ajouterEnigme($enigme);
}

echo "Salle prête avec 3 énigmes sélectionnées aléatoirement parmi " . $banqueEnigmes->getNombreEnigmes() . " !\n\n";

// ------------------------------------------------------
// 3. Création de la session
// ------------------------------------------------------

$session = new SessionJeu($nomEquipe, $salle);

echo "-------------------------------------------\n";
echo "       Lancement de la session de jeu\n";
echo "-------------------------------------------\n\n";

echo "Équipe : $nomEquipe\n";
echo "Salle  : \"" . $salle->getNom() . "\"\n\n";

// ------------------------------------------------------
// 4. Boucle principale du jeu
// ------------------------------------------------------

while (!$session->estTerminee()) {

    echo "-------------------------------------------\n";
    $session->afficherProgression();
    echo "-------------------------------------------\n";

    echo $session->getEnigmeEnCours()->getTexte() . "\n";

    $reponse = input("Votre réponse : >> ");

    if ($session->repondreAEnigme($reponse)) {
        echo "\n✔ Bonne réponse !\n";
        echo "→ Passage à l’énigme suivante…\n\n";
    } else {
        echo "\n❌ Mauvaise réponse…\n";
        echo "Indice : " . $session->getEnigmeEnCours()->getIndice() . "\n\n";
    }
}


// ------------------------------------------------------
// 5. Fin de session
// ------------------------------------------------------

echo "-------------------------------------------\n";
echo "        F I N   D E   L A   S E S S I O N\n";
echo "-------------------------------------------\n\n";

echo "Résultat pour l'équipe : $nomEquipe\n\n";

$enigmesResolues = $salle->getNombreEnigmes();
echo "✔ Énigmes résolues : $enigmesResolues / $enigmesResolues\n";
echo "✔ Nombre total de tentatives : " . $session->getNombreTentatives() . "\n";
echo "✔ Bravo, vous avez terminé la salle !\n\n";

echo "===========================================\n";
echo "        MERCI D’AVOIR JOUÉ AVEC NOUS !\n";
echo "===========================================\n";