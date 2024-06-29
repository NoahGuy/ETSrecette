<?php

require_once(__DIR__."/../config.php");

if ($id == 0) {

    $requete = $pdo->prepare("SELECT * FROM recettes ORDER BY RAND() LIMIT 7");
    $requete->execute();
    
    echo json_encode($requete->fetchAll());

} else {

    $requete = $pdo->prepare("SELECT * FROM recettes WHERE type_de_plat = :id");
    $requete->bindParam(":id", $id);
    $requete->execute();
    
    echo json_encode($requete->fetchAll());
}




?>