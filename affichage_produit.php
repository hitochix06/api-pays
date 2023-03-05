<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$query = $pdo->prepare('SELECT a.* , c.type FROM categorie c  join produits a on c.id = a.categorie_id ORDER BY id DESC  ');
$query->execute();
$produits = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?= template_header('affichage_produit'); ?>
<div class="container">
  <br>
  <h2 class="text text-center">Affichage </h2><br>
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
              <?php 
                    $id = $categorie['id'];
                    echo <<<EOT
                      <a href="update_produit.php?id=$id" class="btn btn-warning">update</a>
                      <a href="delete_article.php?id=$id" class="btn btn-danger">delete</a> 
                    EOT;;
              ?>
            </center>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
<?= template_footer() ?>