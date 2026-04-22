<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles for</title>
</head>

<body>
    <h1>Les boucles for</h1>
    <h2>Version classique</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) { ?>
        <p>Tour n°<?= $i ?></p>
    <?php } ?>

    <!-- Génération d'une liste à puces -->
    <ul>
        <?php
        for ($i = 1; $i <= 5; $i++) { ?>
            <li>Tour n°<?= $i ?></li>
        <?php } ?>
    </ul>

    <h2>Version alternative</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) : ?>
        <p>Tour n°<?= $i ?></p>
    <?php endfor; ?>

</body>

</html>