<?php
include 'functions.php';

$pdo = pdo_connect_mysql();
$query = $pdo->prepare('SELECT a.* , c.type FROM categorie c  join produits a on c.id = a.categorie_id ORDER BY id DESC  ');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<div class="content">
	<h2>Toto</h2>

  <!-- Conteneur principal -->
  <div id="mainContainer">
    <div class="form">
      <!-- Contenu principal -->
      <main class="main-content">
        <!-- En-tête -->
        <div class="heading">
          Affichage produit
        </div>
  
	<div class="content read">
	    <a href="create_produit" class="create-contact" >Ajouter un produit</a>
      <div class="container">
  <br>
  <div class="row">
    <?php foreach ($produits as $categorie) : ?>
      <div class="col-4 mb-5">
        <div class="card" style="width: 18rem;">
          <img src="./images/<?= $categorie['image'] ?>" width="150px" height="200px" class="card-img-top" alt="...">
          <div class="card-body">
            <center>
              <h5 class="card-title"><?= $categorie['nom'] ?></h5>
              <p class="card-text"><?= $categorie['description'] ?></p>
              <p class="card-text"><?= $categorie['type'] ?></p>
              <p class="card-text"><?= $categorie['prix'] ?> Euro</p>
              <?php 
                    $id = $categorie['id'];
                    echo <<<EOT
                      <a href="update_produit.php?id=$id" class="btn btn-warning">Modifier</a>
                      <a href="delete_produit.php?id=$id" class="btn btn-danger">Supprimer</a> 
                    EOT;;

              ?>
            </center>
            
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

</div>



<?=template_footer()?>