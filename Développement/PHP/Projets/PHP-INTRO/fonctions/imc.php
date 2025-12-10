<?php

$taille = readline("Saisir votre taille (en m) : ");
$poids = readline("Saisir votre poids (en kg) : ");

echo "Votre IMC est de " . calculerImc($taille, $poids);