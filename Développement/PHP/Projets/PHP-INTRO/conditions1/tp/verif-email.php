<?php
$email = readline("Saisir une adresse email : ");
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse $email est valide !";
} else {
    echo "L'adresse $email est invalide !";
}

?>