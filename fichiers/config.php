<?php
session_start();

$hostname = "db";
$username = "user";
$password = "password";
$database = "mydatabase";

try {

    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
    exit();
}

function liste_types_plats($pdo) {

    $stmt = $pdo->query("SELECT * FROM types_plats");
    $types_plats = $stmt->fetchAll();
    return $types_plats;
}

function liste_types_cuisines($pdo) {

    $stmt = $pdo->query("SELECT * FROM types_cuisines");
    $types_cuisines = $stmt->fetchAll();
    return $types_cuisines;
}
?>