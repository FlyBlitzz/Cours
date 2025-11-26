<?php
$equipesPresentes = ['France', 'Brésil', 'Argentine', 'Espagne', 'Sénégal', 'Australie', 'Belgique'];
$equipe = readline("Choisir une équipe : ");
if (in_array($equipe, $equipesPresentes)) {
    echo $equipe . " sera présent(e) à la prochaine coupe du monde";
} else {
    echo $equipe . " ne sera pas présent(e) à la prochaine coupe du monde";
}