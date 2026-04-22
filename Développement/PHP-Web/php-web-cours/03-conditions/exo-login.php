<?php
$estConnecte = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO LOGIN</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php if ($estConnecte) : ?>
        <a href="#">Deconnexion</a>
    <?php else: ?>
        <a href="#">Connexion</a>
    <?php endif; ?>
</body>

</html>