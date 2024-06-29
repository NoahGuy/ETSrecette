<?php

require_once(__DIR__."/../config.php");

// Get raw JSON data from request body
$body = file_get_contents("php://input");

// Decode JSON data into an object (no need to decode if not decoded)
$jsonData = json_decode($body);

// Update the main recipe in the `recettes` table
$updateRecipe = $pdo->prepare("UPDATE `recettes` SET 
                                    `titre` = :titre,
                                    `temps_de_preparation` = :temps_de_preparation,
                                    `type_de_plat` = :type_de_plat,
                                    `type_de_cuisine` = :type_de_cuisine,
                                    `desc_courte` = :desc_courte,
                                    `image_url` = :image_url
                                WHERE `id` = :id");

// Bind parameters from JSON data
$updateRecipe->bindParam(":titre", $jsonData->titre);
$updateRecipe->bindParam(":temps_de_preparation", $jsonData->temps_de_preparation);
$updateRecipe->bindParam(":type_de_plat", $jsonData->type_de_plat);
$updateRecipe->bindParam(":type_de_cuisine", $jsonData->type_de_cuisine);
$updateRecipe->bindParam(":desc_courte", $jsonData->desc_courte);
$updateRecipe->bindParam(":image_url", $jsonData->image_url);
$updateRecipe->bindParam(":id", $id);
$updateRecipe->execute();

// Delete existing preparation steps (`etapes_de_preparation`) for the recipe
$deleteEtapes = $pdo->prepare("DELETE FROM `etapes_de_preparation` WHERE `recette_id` = :id");
$deleteEtapes->bindParam(':id', $id);
$deleteEtapes->execute();

// Insert new preparation steps (`etapes_de_preparation`) for the recipe
$insertEtape = $pdo->prepare("INSERT INTO `etapes_de_preparation` (`recette_id`, `etape_numero`, `etape`)
                              VALUES (:id, :etape_numero, :etape)");

foreach ($jsonData->etapes_de_preparation as $etape_numero => $etape) {
    $insertEtape->bindParam(':id', $id);
    $insertEtape->bindParam(':etape_numero', $etape_numero);
    $insertEtape->bindParam(':etape', $etape);
    $insertEtape->execute();
}

// Delete existing ingredients for the recipe
$deleteIngredients = $pdo->prepare("DELETE FROM `ingredients` WHERE `recette_id` = :id");
$deleteIngredients->bindParam(':id', $id);
$deleteIngredients->execute();

// Insert new ingredients for the recipe
$insertIngredient = $pdo->prepare("INSERT INTO `ingredients` (`nom`, `quantite`, `quantite_equivalente`, `recette_id`)
                                   VALUES (:nom, :quantite, :quantite_equivalente, :id)");

foreach ($jsonData->ingredients as $ingredient) {
    $insertIngredient->bindParam(':nom', $ingredient->nom);
    $insertIngredient->bindParam(':quantite', $ingredient->quantite);
    $insertIngredient->bindParam(':quantite_equivalente', $ingredient->quantite_equivalente);
    $insertIngredient->bindParam(':id', $id);
    $insertIngredient->execute();
}

// Fetch the updated recipe data and return as JSON response
$selectRecipe = $pdo->prepare("SELECT * FROM `recettes` WHERE `id` = :id");
$selectRecipe->bindParam(":id", $id);
$selectRecipe->execute();

echo json_encode($selectRecipe->fetch());
?>