<?php

require __DIR__ . '/vendor/autoload.php';

use PhpSchool\CliMenu\Builder\CliMenuBuilder;
use PhpSchool\CliMenu\CliMenu;
use League\CLImate\CLImate;

// -------------------------------------------------------------
// CLImate et données
// -------------------------------------------------------------
$cli = new CLImate;
$people = [];

// -------------------------------------------------------------
// FONCTIONS MÉTIERS (CLImate pour affichage + saisie)
// -------------------------------------------------------------

/**
 * Ajout d'une personne via CLImate
 */
function addPersonWithClimate(array &$people, CLImate $cli) {
    $cli->br()->green()->bold("➕ Ajout d'une personne");
    $cli->border();

    // Saisie via CLImate
    $id = (int) $cli->input("ID :")->prompt();
    $prenom = $cli->input("Prénom :")->prompt();
    $nom = $cli->input("Nom :")->prompt();

    $people[] = [
        'id'     => $id,
        'prenom' => $prenom,
        'nom'    => $nom
    ];

    $cli->br();
    $cli->green()->bold("✔ Personne ajoutée !");
    $cli->lightBlue("[$id] $prenom $nom");
    $cli->br();
    $cli->comment("Appuyez sur Entrée pour revenir au menu...");
    fgets(STDIN);
}

/**
 * Liste des personnes via CLImate
 */
function listPeopleWithClimate(array $people, CLImate $cli) {
    $cli->br()->bold()->backgroundDarkGray()->white("📋 Liste des personnes");

    if (empty($people)) {
        $cli->br();
        $cli->yellow("Aucune personne enregistrée.");
        $cli->br();
        $cli->comment("Appuyez sur Entrée pour revenir au menu...");
        fgets(STDIN);
        return;
    }

    $cli->br();

    $table = [];
    foreach ($people as $p) {
        $table[] = [
            'ID'     => $p['id'],
            'Prénom' => $p['prenom'],
            'Nom'    => $p['nom']
        ];
    }

    $cli->table($table);

    $cli->comment("\nAppuyez sur Entrée pour revenir au menu...");
    fgets(STDIN);
}

/**
 * Recherche via CLImate
 */
function searchPersonWithClimate(array $people, CLImate $cli) {
    $cli->br()->blue()->bold("🔎 Recherche d'une personne");
    $cli->border();

    $id = (int) $cli->input("ID à rechercher :")->prompt();

    foreach ($people as $p) {
        if ($p['id'] === $id) {
            $cli->br();
            $cli->green()->bold("✔ Personne trouvée !");
            $cli->lightBlue("[$id] {$p['prenom']} {$p['nom']}");
            $cli->br();
            $cli->comment("Appuyez sur Entrée pour revenir au menu...");
            fgets(STDIN);
            return;
        }
    }

    $cli->br();
    $cli->red("❌ Aucune personne trouvée avec l'id $id.");
    $cli->comment("Appuyez sur Entrée pour revenir au menu...");
    fgets(STDIN);
}


// -------------------------------------------------------------
// MENU CLI-MENU (navigation uniquement)
// -------------------------------------------------------------

$menu = (new CliMenuBuilder)
    ->setTitle('Gestion des personnes')
    ->setTitleSeparator('- ')
    ->setExitButtonText('❌ Quitter')

    // Ajout
    ->addItem('➕ Ajouter une personne', function (CliMenu $menu) use (&$people, $cli) {
        $menu->close(); // on ferme le menu temporairement
        addPersonWithClimate($people, $cli);
        $menu->open();  // retour au menu
    })

    // Liste
    ->addItem('📋 Lister les personnes', function (CliMenu $menu) use (&$people, $cli) {
        $menu->close();
        listPeopleWithClimate($people, $cli);
        $menu->open();
    })

    // Recherche
    ->addItem('🔎 Rechercher par ID', function (CliMenu $menu) use (&$people, $cli) {
        $menu->close();
        searchPersonWithClimate($people, $cli);
        $menu->open();
    })

    ->addLineBreak('-')
    ->setPadding(1, 2)
    ->setMarginAuto()
    ->build();

// Lancement
$menu->open();
