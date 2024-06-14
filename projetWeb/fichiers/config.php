<?php
//Démarer la session pour pouvoir utiliser $_SESSION
session_start();

$hostname = "db";
$username = "user";
$password = "password";
$database = "mydatabase";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", 
          $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, 
          PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} 
catch(PDOException $e) {
    echo "Connexion échouée: " . $e->getMessage();
}

function liste_types_plats($conn) {
    
    global $conn;
    $requete = $conn->prepare("SELECT * FROM types_plats");
    $requete->execute();
    $tab = $requete->fetchAll();

    return $tab;
}


function liste_types_cuisines($conn) {

    global $conn;
    $requete = $conn->prepare("SELECT * FROM types_cuisines");
    $requete->execute();
    $tab = $requete->fetchAll();

    return $tab;
}
?>