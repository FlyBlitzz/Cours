<?php
$photocopie = readline("Nombre de photocopies réalisées : ");
if ($photocopie <= 10) {
    $prix = $photocopie * 0.3;
    echo "Le prix total est de $prix €";
} elseif ($photocopie > 10 and $photocopie <= 30) {
    $prix = 0.3*10 + ($photocopie - 10) * 0.25;
    echo "Le prix total est de $prix €";
} else {
    $prix = 0.3*10 + 0.25*20 + ($photocopie - 30) * 0.2;
    echo "Le prix total est de $prix € \n";
}
if ($prix > 50) {
    $prix = $prix * 0.9;
    echo "Suite à une remise de 10% le prix final est de $prix €";
}

?>