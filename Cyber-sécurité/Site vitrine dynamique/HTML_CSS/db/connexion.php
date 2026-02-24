<?php

// Définir une fonction qui retourne une connexion avec le serveur de base de données

require_once __DIR__ . "/../config/database.php";

function getConnexion(): PDO
{
    try {
        //$dsn = "pgsql:host=$host;port=$port;dbname=$baseDonnes";
        $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
        $connexion = new PDO($dsn, DB_USER, DB_PASSWORD);
        return $connexion;
    } catch (PDOException $erreur) {
        // Afficher le message d'erreur
        echo "Erreur : " . $erreur->getMessage();
        exit;
    }
}