<?php

$produits = [
    [
        'id' => 1,
        'nom' => 'Clavier',
        'prix' => 49.90,
        'description' => 'Clavier mécanique'
    ],
    [
        'id' => 2,
        'nom' => 'Souris',
        'prix' => 29.90,
        'description' => 'Souris sans fil'
    ],
    [
        'id' => 3,
        'nom' => 'Écran',
        'prix' => 199.90,
        'description' => 'Écran 24 pouces'
    ],
    [
        'id' => 4,
        'nom' => 'Produit suspect',
        'prix' => 9.99,
        'description' => "<script>alert('Votre site est vulnérable ! AhAhAh !')</script>"
    ],
    [
        'id' => 5,
        'nom' => 'Produit pirate',
        'prix' => 0.01,
        'description' =>  "<script>
alert('Votre site est vulnérable ! AhAhAh !');
document.body.style.background='red';
</script>"
    ]
];
