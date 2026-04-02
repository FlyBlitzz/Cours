<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles while</title>
</head>

<body>
    <h1>Les boucles while</h1>
    <h2>Version classique</h2>
    <?php
    $i = 1;
    while ($i <= 5) { ?>
        <p>Numéro : <?= $i ?></p>
    <?php $i++;
    } ?>

    <h2>Version alternative</h2>
    <?php
    $i = 1;
    while ($i <= 5) : ?>
        <p>Numéro : <?= $i ?></p>
    <?php $i++;
    endwhile; ?>
</body>

</html>