<?php
$date = date("d/m/Y");
$heure = date("H\hi");
echo ("Aujourd'hui nous sommes le " . $date . "\n");
echo ("Il est actuellement " . $heure . "\n");
if (date("H") < 13) {
    echo ("Je vous souhaite une bonne matinée !");
} else {
    echo ("Je vous souhaite un bon après-midi !");
}

?>