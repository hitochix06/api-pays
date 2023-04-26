<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
  $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
  $type = isset($_POST['type']) ? $_POST['type'] : '';
  $stmt = $pdo->prepare('INSERT INTO categorie VALUES (?, ?)');
  $stmt->execute([$id, $type,]);
  // Message de sortie
  $msg = 'Créé avec succès!';
}


echo $twig->render("create_categorie.twig", array("msg" => $msg));
