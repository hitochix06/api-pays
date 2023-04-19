<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
  if (!empty($_POST)) {
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $stmt = $pdo->prepare('UPDATE categorie SET type = ? WHERE id = ?');
    $stmt->execute([$type, $_GET['id']]);
    $msg = 'mis à jour avec succès!';
  }
  $stmt = $pdo->prepare('SELECT * FROM categorie WHERE id = ?');
  $stmt->execute([$_GET['id']]);
  $produit = $stmt->fetch(PDO::FETCH_ASSOC);
  if (!$produit) {
    exit('Le produit n’existe pas avec cet ID !');
  }

  echo $twig->render("update_categorie.twig", array("produit" => $produit, "msg" => $msg));
} else {
  exit('No ID specified!');
}
