<?php

require_once(__DIR__."/../config.php");

$body = json_decode(file_get_contents("php://input"));

$updateRecipe = $pdo->prepare("UPDATE `recettes` SET 
                                `titre` = :titre,
                                `temps_de_preparation` = :temps_de_preparation,
                                `type_de_plat` = :type_de_plat,
                                `type_de_cuisine` = :type_de_cuisine,
                                `desc_courte` = :desc_courte,
                                `image_url` = :image_url
                              WHERE `id` = :id");

$updateRecipe->bindParam(":id", $id);
$updateRecipe->bindParam(":titre", $body->titre);
$updateRecipe->bindParam(":temps_de_preparation", $body->temps_de_preparation);
$updateRecipe->bindParam(":type_de_plat", $body->type_de_plat);
$updateRecipe->bindParam(":type_de_cuisine", $body->type_de_cuisine);
$updateRecipe->bindParam(":desc_courte", $body->desc_courte);
$updateRecipe->bindParam(":image_url", $body->image_url);

$updateRecipe->execute();

$deleteEtapes = $pdo->prepare("DELETE FROM `etapes_de_preparation` WHERE `recette_id` = :id");
$deleteEtapes->bindParam(':id', $id);
$deleteEtapes->execute();

$insertEtape = $pdo->prepare("INSERT INTO `etapes_de_preparation` (`recette_id`, `etape_numero`, `etape`)
                              VALUES (:id, :etape_numero, :etape)");

foreach ($body->etapes_de_preparation as $etape_numero => $etape) {
    $insertEtape->bindParam(':id', $id);
    $insertEtape->bindParam(':etape_numero', $etape_numero);
    $insertEtape->bindParam(':etape', $etape);
    $insertEtape->execute();
}

$deleteIngredients = $pdo->prepare("DELETE FROM `ingredients` WHERE `recette_id` = :id");
$deleteIngredients->bindParam(':id', $id);
$deleteIngredients->execute();

$insertIngredient = $pdo->prepare("INSERT INTO ingredients (`nom`, `quantite`, `quantite_equivalente`, `recette_id`)
                                   VALUES (:nom, :quantite, :quantite_equivalente, :id)");

foreach ($body->ingredients as $ingredient) {
    $insertIngredient->bindParam(':nom', $ingredient->nom);
    $insertIngredient->bindParam(':quantite', $ingredient->quantite);
    $insertIngredient->bindParam(':quantite_equivalente', $ingredient->quantite_equivalente);
    $insertIngredient->bindParam(':id', $id);
    $insertIngredient->execute();
}

$selectRecipe = $pdo->prepare("SELECT * FROM `recettes` WHERE `id` = :id");
$selectRecipe->bindParam(":id", $id);
$selectRecipe->execute();

echo json_encode($selectRecipe->fetch());
?>