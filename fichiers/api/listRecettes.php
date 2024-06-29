<?php

require_once(__DIR__."/../config.php");

$requete = $pdo->prepare("SELECT * FROM recettes ORDER BY RAND() LIMIT 7");
$requete->execute();

echo json_encode($requete->fetchAll());



?>