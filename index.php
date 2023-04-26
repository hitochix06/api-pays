<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$query = $pdo->prepare('SELECT a.* , c.type FROM categorie c  join produits a on c.id = a.categorie_id ORDER BY id DESC  ');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);

echo $twig->render("index.twig", array("produits" => $produits, "categories" => $categories));
