<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Introduction</title>
    <style>
        p span {
            color: blue;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <p>Introduction cours PHP-WEB</p>
    <!-- Code php -->
    <?php
    // on est en PHP
    echo "<p>Introduction cours PHP-WEB</p>";
    echo "<h2>BTS SIO1</h2>";
    ?>

    <?php echo "<p>Introduction cours PHP-WEB</p>"; ?>
    <?= "<p>Introduction cours PHP-WEB</p>"  ?>

    <!-- Afficher la date du jour au format d/m/Y dans une balise <p> -->
    <p>Nous sommes le <span> <?= date('d/m/Y') ?> </span></p>

    <p>Nous sommes le <?php echo date('d/m/Y'); ?></p>

</body>

</html>