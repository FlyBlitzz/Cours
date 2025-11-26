<?php
$saisi = (int) readline("Saisir un nombre : ");
$nombre = 0;
$somme = 0;

while ($nombre <= $saisi) {
    if ($nombre % 2 == 0) {
        $somme += $nombre;
        echo $nombre . "\n";
    }
    $nombre++;
}
echo "La somme des nombres pairs est : " . $somme;