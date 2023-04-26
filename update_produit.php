<?php

include('functions.php');
$pdo = pdo_connect_mysql();

if (isset($_GET['id'])) {

  $stmt = $pdo->prepare('SELECT * FROM produits WHERE id = ?');
  $stmt->execute([$_GET['id']]);
  $produit = $stmt->fetch(PDO::FETCH_ASSOC);

  if (isset($_POST['bouton'])) {

    $id = $_GET['id'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $note = $_POST['note'];
    $categorie = $_POST['categorie'];

    if (!empty($_FILES['image']['name'])) {
      unlink('images/' . $produit['image']);
      $new_image = $_FILES["image"]["name"];
      $tmpname = $_FILES["image"]["tmp_name"];
      $place = "images/";
      move_uploaded_file($tmpname, $place . $new_image);

      $query = $pdo->prepare("UPDATE `produits` SET `nom`= '$nom' , `image`= '$new_image' , `description`= '$description' ,`note`= '$note' , `categorie_id`= '$categorie' WHERE `id`= ? ");
    } else {
      // Garder l'ancienne image
      $query = $pdo->prepare("UPDATE `produits` SET `nom`= '$nom' , `description`= '$description' ,`note`= '$note' , `categorie_id`= '$categorie' WHERE `id`= ? ");
    }
    $query->execute([$id]);
  }


  echo $twig->render("update_produit.twig", array("produit" => $produit, "categories" => $categories));
}
