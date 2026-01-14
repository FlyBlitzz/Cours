<?php
$notes = [
    "dupond" => 12,
    "michel" => 15,
    "prout" => 10,
];

$notes['dupond'] = 15;
$notes['michel'] = 20;
$notes['machin'] = 4;
foreach ($notes as $nom => $note) {
    echo "$nom $note \n";
}