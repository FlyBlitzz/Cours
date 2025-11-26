<?php
$nombre = (int) readline("Entrez un nombre entier : ");
echo "Les 20 premiers termes de la suite de Syracuse pour N=$nombre sont :\n";

for ($i = 0; $i < 20; $i++) {
    echo $nombre . " ";
    if ($nombre % 2 == 0) {
        $nombre /= 2;
    } else {
        $nombre = $nombre * 3 + 1;
    }
}
?>