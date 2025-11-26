<?php
$phrase1 = readline("Saisir une phrase : ");
$mot1 = readline("Saisir un mot : ");

$phrase2 = strtolower($phrase1);
$mot2 = strtolower($mot1);
$nombre = substr_count($phrase2, $mot2);

echo 'Le mot "' . $mot2 . '" apparait ' . $nombre . " fois dans la phrase"

?>