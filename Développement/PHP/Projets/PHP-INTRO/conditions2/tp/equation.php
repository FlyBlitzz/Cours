<?php
$a = readline("Entrer le coefficient a : ");
$b = readline("Entrer le coefficient b : ");
$c = readline("Entrer le coefficient c : ");
$equation = $a . "x**2+" . $b . "x+" . $c . "=0";
$delta = ($b**2)-4*$a*$c;
$x1 = (-$b - sqrt($delta))/(2*$a);
$x2 = (-$b + sqrt($delta))/(2*$a);
$x0 = (-$b)/(2*$a);
echo "Résolution de l'équation $equation \n";
if ($delta > 0) {
    echo "Il y a 2 solutions distinctes : \n        x1 = $x1 \n        x2 = $x2";
} elseif ($delta == 0) {
    echo "Il y a 1 solution : \n x0 = $x0";
} else {
    echo "Il n'y a pas de solution";
}

?>