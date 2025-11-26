<?php
$heureFormat = readline("Saisir une heure (HH:MM) : ");
$heure = substr($heureFormat, 0, 2);
$minute = substr($heureFormat, 3, 2);
if (strlen($heureFormat) > 5 or $heure > 24 or $minute > 60 or $heureFormat[2] <> ":") {
    echo "INVALIDE";
} else {
    echo "VALIDE";    
}

?>