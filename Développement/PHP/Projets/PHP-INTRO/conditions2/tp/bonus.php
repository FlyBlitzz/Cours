<?php
echo "=========================================== \n";
echo "CALCULATEUR D'ASSURANCE AUTOMOBILE \n";
echo "=========================================== \n";
$age = readline("Age du conducteur (18-99) : ");
if ($age >= 18 and $age <= 99) {
    echo "✓ Age validé : $age ans \n";
} else {
    echo "Age invalidé : $age ans \n";
}
$anneePermis = readline("Nombre d'années de permis (0-80) : ");
if ($anneePermis >= 0 and $anneePermis <= 80) {
    echo "✓ Années de permis validées : $anneePermis an(s) \n";
} else {
    echo "Années de permis invalidées : $anneePermis an(s) \n";
}
$accident = readline("Nombre d'accidents responsables (0-10) : ");
if ($accident >= 0 and $accident <= 10) {
    echo "✓ Nombre d'accidents validé : $accident \n";
} else {
    echo "Nombre d'accidents invalidé : $accident \n";
}
echo "Type de véhicule : \n
 1 - Citadine (< 90cv) \n
 2 - Berline (90-150cv) \n
 3 - SUV (150-250cv) \n
 4 - Sportive (> 250cv) \n";
$voiture = readline("Votre choix (1-4) : ");
if ($voiture == 1) {
    $voiture = "Citadine";
    echo "✓ Type de véhicule : $voiture \n";
} elseif ($voiture = 2) {
    $voiture == "Berline";
    echo "✓ Type de véhicule : $voiture \n";
} elseif ($voiture = 3) {
    $voiture == "SUV";
    echo "✓ Type de véhicule : $voiture \n";
} elseif ($voiture == 4) {
    $voiture = "Sportive";
    echo "✓ Type de véhicule : $voiture \n";
}
echo "Zone géographique : \n
 A - Grande ville (> 200 000 hab) \n
 B - Ville moyenne (50 000 - 200 000 hab) \n
 C - Petite ville (10 000 - 50 000 hab) \n
 D - Zone rurale (< 10 000 hab) \n";
$zone = readline("Votre choix (A/B/C/D) : ");
if ($zone == "A") {
    $zone = "Grande ville";
    echo "✓ Zone géographique : $zone \n";
} elseif ($zone == "B") {
    $zone = "Ville moyenne";
    echo "✓ Zone géographique : $zone \n";
} elseif ($zone == "C") {
    $zone = "Petite ville";
    echo "✓ Zone géographique : $zone \n";
} elseif ($zone == "D") {
    $zone = "Zone rurale";
    echo "✓ Zone géographique : $zone \n";
}
$kilometre = readline("Kilométrage annuel prévu (en km) : ");
echo "✓ Kilométrage validé : $kilometre km/an \n";
$garage = readline("Le véhicule sera-t-il garé dans un garage fermé ? (O/N) : ");
if ($garage == "O") {
    $garage = "Oui";
    echo "✓ Garage : $garage";
} else {
    $garage = "Non";
    echo "✓ Garage : $garage";
}
$bonusMalus = readline("Coefficient bonus/malus actuel (0.50 à 3.50) :");
if ($bonusMalus >= 0.5 and $bonusMalus <= 3.5) {
    echo "✓ Bonus/Malus validé : $bonusMalus";
} else {
    echo "Bonus/Malus invalidé : $bonusMaus";
}

?>