<?php
echo ("Aujourd'hui nous somme le " . date("d/m/Y") . "\n");
if (date("N") == 6) {
    echo "Je vous souhaite un bon week-end";
} elseif (date("N") == 7  ) {
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite une bonne journée"; 
}

?>