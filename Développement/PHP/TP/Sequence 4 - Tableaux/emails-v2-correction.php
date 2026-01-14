<?php

$emails = [
    "Dupond" => "dupond@gmail.com",
    "Martin" => "martin@free.fr",
    "Durand" => "durand@laposte.net",
    "Petit"  => "petit@gmail.com"
];

// Demande du domaine à l'utilisateur
$domaine = readline("Entrez un nom de domaine (ex : gmail.com) : ");
$domaine = trim($domaine);

echo "\nMembres ayant une adresse @$domaine :\n";

$trouve = false;

foreach ($emails as $nom => $email) {
    if (str_ends_with($email, "@" . $domaine)) {
        echo "- $nom\n";
        $trouve = true;
    }
}

if (!$trouve) {
    echo "Aucun membre trouvé pour ce domaine.\n";
}
