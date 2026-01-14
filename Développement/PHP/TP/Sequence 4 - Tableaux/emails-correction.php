<?php

$emails = [
    "Dupond" => "dupond@gmail.com",
    "Martin" => "martin@free.fr",
    "Durand" => "durand@laposte.net",
    "Petit"  => "petit@gmail.com"
];

echo "Membres de l'association \n";

foreach ($emails as $nom => $email) {
    echo "$nom : $email \n";
}
