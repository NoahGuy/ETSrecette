<?php

require_once('__DIR__."/../config.php');

$requete = $pdo->prepare("SELECT * FROM recettes WHERE id = :id");
$requete->bindParam(":id", $id);
$requete->execute();

$recette = $requete->fetch();

//ingredients
$requete2 = $pdo->prepare("SELECT nom, quantite, quantite_equivalente FROM ingredients WHERE recette_id = :id");
$requete2->bindParam(":id", $id);
$requete2->execute();
$ingredients = $requete2->fetchAll();

$requete3 = $pdo->prepare("SELECT etape FROM etapes_de_preparation WHERE recette_id = :id ORDER BY etape_numero");
$requete3->bindParam(":id", $id);
$requete3->execute();
$etapes_de_preparation = $requete3->fetchAll(PDO::FETCH_COLUMN); //array de strings plutot qu'objets

//ajouter a la recette
$recette['ingredients'] = $ingredients;
$recette['etapes_de_preparation'] = $etapes_de_preparation;




if ($requete) {
    echo json_encode($recette);
} else {
    echo json_encode(['error' => 'Recipe not found']);
}
?>