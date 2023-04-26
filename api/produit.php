<?php
//creation une api categories
header("Content-Type: application/json; charset=UTF-8");

require '../functions.php';

//PDO query
$query = $pdo->query("SELECT * FROM produits");
//fetch all data

// ...Faites votre requête SQL ici .ceci est un exemple !
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produits);
