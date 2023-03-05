<?php

include('functions.php');
$pdo = pdo_connect_mysql();

if (isset($_GET['id'])) {

  
    
  $stmt = $pdo->prepare('SELECT * FROM produits WHERE id = ?');
  $stmt->execute([$_GET['id']]);
  $produits = $stmt->fetch(PDO::FETCH_ASSOC);

  if (isset($_POST['bouton'])) {

      $id = $_GET['id'];
      $nom = $_POST['nom'];
      $description = $_POST['description'];
      $prix = $_POST['prix'];
      $categorie = $_POST['categorie'];
      
      if (!empty($_FILES['image']['name'])) {
        unlink('images/' . $produits['image']);
        $new_image = $_FILES["image"]["name"];
          $tmpname = $_FILES["image"]["tmp_name"];
          $place = "images/";
          move_uploaded_file($tmpname, $place . $new_image);

          $query = $pdo->prepare("UPDATE `produits` SET `nom`= '$nom' , `image`= '$new_image' , `description`= '$description' ,`prix`= '$prix' , `categorie_id`= '$categorie' WHERE `id`= ? ");
      } else {
          // Garder l'ancienne image
          $query = $pdo->prepare("UPDATE `produits` SET `nom`= '$nom' , `description`= '$description' ,`prix`= '$prix' , `categorie_id`= '$categorie' WHERE `id`= ? ");
      }
      $query->execute([$id]);
    }
}

?>

<?=template_header('Home')?>
 
<div id="mainContainer">
    <div class="form">
      <!-- Contenu principal -->
      <main class="main-content">
        <!-- En-tête -->
        <div class="heading">
          <span class="material-icons"> add </span>
          Modifier le produit
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <!-- Contenu -->
          <div class="content">
            <!-- Ajout de produit -->
            <div id="addProductForm" class="product-form">
              <div class="input-row">
              <div class="input-group">
                  <label for="id">ID</label>
                  <input type="text" name="id" placeholder="26" value="auto" id="id"> 
                  <label for="nom">Nom du produit</label>
                  <input type="text" name="nom" placeholder="Nom du produit"  required />
                    <div class="mb-3">
                      <label for="ImportImage" class="form-label">Image du produit</label>
                      <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                <div class="mb-3">
                  <label for="Description" class="form-label">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
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
              <input  type="submit" name="bouton"value="Modifier" class="validate-button">
         </form>
</div>
</body>
</html>
<?=template_footer()?>