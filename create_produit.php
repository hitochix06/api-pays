<?php

include('functions.php');
$pdo = pdo_connect_mysql();

if (isset($_POST['bouton'])) {
  $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
  $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
  // image 
  $image = $_FILES["image"]["name"];
  $tmpname = $_FILES["image"]["tmp_name"];
  // Définir le dossier de destination pour l'image
  $place = "images/";
  // Déplacer l'image téléchargée vers le dossier de destination
  move_uploaded_file($tmpname, $place.$image);
  $description = isset($_POST['description']) ? $_POST['description'] : '';
  $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : '';
  $prix = isset($_POST['prix']) ? $_POST['prix'] : '';
  $query = $pdo->prepare('INSERT INTO `produits`(`id`,`nom`, `image`, `description`, `prix`, `categorie_id`) VALUES (?,?,?,?,?,?)');
  $query->execute([$id,$nom,$image,$description,$prix,$categorie]);

}

?>

<?= template_header('Add New Article') ?>



 <!-- Conteneur principal -->


<div id="mainContainer">
    <div class="form">
      <!-- Contenu principal -->
      <main class="main-content">
        <!-- En-tête -->
        <div class="heading">
          <span class="material-icons"> add </span>
          Ajouter un produit
        </div>
        <form action="create_produit.php" method="post" enctype=multipart/form-data>
          <!-- Contenu -->
          <div class="content">
            <!-- Ajout de produit -->
            <div id="addProductForm" class="product-form">
              <!-- Nom et type-->
              <div class="input-row">
                <div class="input-group">
                  <label for="id">ID</label>
                  <input type="text" name="id" placeholder="26" value="auto" id="id"> 
                  <label for="nom">Nom du produit</label>
                  <input type="text" name="nom" placeholder="Nom du produit"  required />
                <div class="mb-3">
                  <label for="formFile" class="form-label">Image du produit</label>
                  <input class="form-control" name="image" type="file" id="formFile">
                </div>
                <div class="mb-3">
                <label for="Description" class="form-label">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="prix">Prix du produit</label>
                  <input type="number" name="prix" placeholder="Prix du produit" id="prix" required />
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Nom Categorie</label>
                    <select class="form-select" name="categorie" aria-label="Default select example">
                    <option selected>Choisir une catégorie</option>
                      <?php foreach ($categories as $produit): ?>
                      <option value="<?= $produit['id'] ?>"><?= $produit['type'] ?></option>
                      <?php endforeach; ?>
                   </select>
                </div>
                </div> 
                </div>
              </div>
              <input  type="submit" name="bouton"value="Ajouter" class="validate-button">
          </form>
            
</div>



</body>

</html>
<?= template_footer() ?>