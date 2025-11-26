<?php
$note = readline("Saisir uen note (entre 0 et 20) : ");
if ($note < 10) {
    echo "Vous n'avez pas la moyenne";
} elseif ($note == 10) {
    echo "Vous avez juste la moyenne";
} else {
    echo "BRAVO, vous avez la moyenne"; 
}

?>