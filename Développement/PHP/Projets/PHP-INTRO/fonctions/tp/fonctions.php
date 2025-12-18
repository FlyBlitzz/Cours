<?php

function convertirCelsiusFahrenheit(string $message): string
{
    $celsius = readline($message);
    $fahrenheit = ($celsius * 9 / 5) + 32;
    return round($fahrenheit, 1);
}

//$temperature = convertirCelsiusFahrenheit("Saisir une température en °C : ");
//echo "Température en °F : $temperature\n";

function genererNumeroAdherent(): string
{
    $nombre = random_int(0, 999999);
    $suffixe = str_pad((string) $nombre, 6, '0', STR_PAD_LEFT);
    return "AD-" . $suffixe;
}

// echo genererNumeroAdherent();