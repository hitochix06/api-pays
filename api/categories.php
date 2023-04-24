<?php
//creation une api categories
header("Content-Type: application/json; charset=UTF-8");

require '../functions.php';

//PDO query
$query = $pdo->query("SELECT * FROM categories");
//fetch all data

// ...Faites votre requête SQL ici .ceci est un exemple !
$categories = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($categories);
