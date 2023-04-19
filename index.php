<?php
require 'vendor/autoload.php';

include 'functions.php';

$pdo = pdo_connect_mysql();
$query = $pdo->prepare('SELECT a.* , c.type FROM categorie c  join produits a on c.id = a.categorie_id ORDER BY id DESC  ');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);


$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
  'cache' => __DIR__ . '/cache',
  'debug' => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render("index.twig", array("produits" => $produits, "categories" => $categories));
