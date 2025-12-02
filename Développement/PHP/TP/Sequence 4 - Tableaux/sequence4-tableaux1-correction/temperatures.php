<?php

// 1. Création du tableau de températures initiales en Celsius
$temperaturesCelcius = [0, 15, 25, 30, 40, -5, 10.5];

// 2. Initialisation du nouveau tableau qui recevra les températures converties en Fahrenheit
$temperaturesFahrenheit = [];

echo "--- Conversion Celsius vers Fahrenheit ---\n";

// 3. Parcours du tableau Celsius et conversion
// On utilise foreach pour itérer facilement sur chaque température ($tempCelcius)
foreach ($temperaturesCelcius as $tempCelcius) {

    // Application de la formule de conversion : F = C * 1.8 + 32
    // floatval() n'est pas nécessaire ici car $tempCelcius est déjà un nombre (float)
    $tempFahrenheit = ($tempCelcius * 1.8) + 32;

    // Ajout de la nouvelle température calculée dans le tableau de destination
    // On utilise la syntaxe d'ajout dynamique []
    $temperaturesFahrenheit[] = $tempFahrenheit;

    // Affichage des étapes de conversion (pour la pédagogie)
}

// 4. Affichage du résultat final
echo "\n--- Résultat Final ---\n";
echo "Le tableau des températures en Fahrenheit est :\n";
foreach ($temperaturesFahrenheit as $tempFahrenheit) {
    echo $tempFahrenheit . "°F\n";
}
echo "\n";
