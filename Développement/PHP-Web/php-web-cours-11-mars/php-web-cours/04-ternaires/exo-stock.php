<?php
$quantite = 3;
$estCritique = ($quantite < 7);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO STOCK</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <p>
        Quantité : <?= $quantite ?>
        (<?php if ($estCritique): ?>
        <span class="critique">stock critique</span>
    <?php else: ?>
        <span class="suffisant">stock suffisant</span>
        <?php endif; ?>)
    </p>


    <?php if ($estCritique): ?>
        <a href="#" class="btn">Commander</a>
    <?php endif; ?>
</body>

</html>