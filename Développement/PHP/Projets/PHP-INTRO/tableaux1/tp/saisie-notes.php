<?php
$notes = [];
$note = "";
$nombreNotes = 0;
while ($note != "q") {
    $note = readline("Saisir une note (q pour arrêter) : ");
    if ($note == "q") {
    } elseif ($note < 0 || $note > 20) {
        echo "La note saisie est incorrecte \n";
    } else {
        $notes[] = $note;
        $nombreNotes++;
    }
}
echo "Vous avez saisi " . $nombreNotes . " notes. \n";
echo "Les notes saisies sont ";
foreach ($notes as $note) {
    echo $note . " ";
}