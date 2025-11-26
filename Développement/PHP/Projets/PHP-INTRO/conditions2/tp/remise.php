<?php
$prix = readline("Saisir le prix de l'article : ");
$cinqPourcent = $prix * 0.05;
$dixPourcent = $prix * 0.1;
$vingtPourcent = $prix * 0.20;
if ($prix < 1000) {
    echo "La remise est de 5 % soit " . number_format($cinqPourcent, 2) . " euros sur le prix de l'article \nLe montant de l'article après la remise est de " . number_format($prix - $cinqPourcent, 2) . " euros";
} elseif ($prix >= 1000 and $prix < 5000) {
    echo "La remise est de 10 % soit " . number_format($dixPourcent, 2) . " euros sur le prix de l'article \nLe montant de l'article après la remise est de " . number_format($prix - $dixPourcent, 2) . " euros";
} else {
    echo "La remise est de 20 % soit " . number_format($vingtPourcent, 2) . " euros sur le prix de l'article \nLe montant de l'article après la remise est de " . number_format($prix - $vingtPourcent, 2) . " euros"; 
}

?>