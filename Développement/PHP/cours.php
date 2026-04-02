<?php

// Déclaration et initialisation d'un tableau de notes
$notes = [10,12,9,14,15];
//echo $notes;   // affiche simplement Array
echo PHP_EOL;
echo $notes[1];
echo PHP_EOL;
// Afficher les valeurs du tableau
for($i=0;$i<count($notes);$i++){
    echo $notes[$i];
}
echo PHP_EOL;
// Afficher les valeurs avec une boucle foreach
foreach($notes as $note) {
    echo $note;
}
echo PHP_EOL;
// Variante de la boucle foreach
foreach($notes as $index=>$note) {
    echo "$index : $note \n";
}