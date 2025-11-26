<?php
$notes = [];
$note = "";
$nombreNotes = 0;
while ($note != "q") {
    $note = readline("Saisir une note (q pour arrêter) : ");
    if ($note >= 0 && $note <= 20) {
        $notes[] = $note;
    } else {
        echo "Erreur : la note doit être comprise entre 0 et 20.\n";
    }
}
echo "\nVous avez saisies " . count($notes) . " notes.\n";
echo "Les notes saisies sont $notes\n";










