<?php
$saisi = (int) readline("Saisir un nombre entre 0 et 1000 : ");
$coup = random_int(0, 1000);
$essai = 1;

while ($saisi <> $coup) {
    if ($saisi < 0 || $saisi > 1000) {
        echo "Le nombre à deviner doit être compris entre 0 et 1000";
        break;
    }
    $coup = random_int(0, 1000);
    $essai++;
    if ($essai > 50) {
        echo "Tu n'as pas deviné en moins de 50 coups";
        break;
    }
}
if ($saisi >= 0 && $saisi <= 1000 && $essai <= 50) {
    echo "Le nombre à deviner a été trouvé en $essai coups";
}