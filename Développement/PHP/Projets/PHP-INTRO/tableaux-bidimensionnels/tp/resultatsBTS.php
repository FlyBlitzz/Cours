<?php
$moyennes = [
    ['nom' => 'Lilian', 'moyenne' => 15],
    ['nom' => 'Mrick', 'moyenne' => 12],
    ['nom' => 'Marc', 'moyenne' => 16],
    ['nom' => 'Damien', 'moyenne' => 8],
];

$max = 0;
$nomMajor = "";
$recus = [];

foreach ($moyennes as $etudiant) {
    $nom = $etudiant['nom'];
    $moyenne = $etudiant['moyenne'];

    if ($moyenne >= 10) {
        $recus[] = $etudiant;
    }
    if ($moyenne > $max) {
        $max = $moyenne;
        $nomMajor = $nom;
    }
}

echo "Étudiants reçus au BTS :\n";
foreach ($recus as $etudiant) {
    echo "- {$etudiant['nom']} avec {$etudiant['moyenne']} de moyenne\n";
}
echo "Le major de promotion est $nomMajor avec $max de moyenne\n";