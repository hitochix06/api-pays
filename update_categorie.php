<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        $type = isset($_POST['type']) ? $_POST['type'] : '';
        $stmt = $pdo->prepare('UPDATE categorie SET type = ? WHERE id = ?');
        $stmt->execute([ $type, $_GET['id']]);
        $msg = 'mis à jour avec succès!';
    }
    $stmt = $pdo->prepare('SELECT * FROM categorie WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$produit) {
        exit('Le produit n’existe pas avec cet ID !');
    }
} else {
    exit('No ID specified!');
}
?>
<?=template_header('Read')?>

  <!-- Conteneur principal -->
  <div id="mainContainer">
    <div class="form">
      <!-- Contenu principal -->
      <main class="main-content">
        <!-- En-tête -->
        <h2 class="heading">
          <div>Mettre à jour le produit #<?=$produit['id']?></div>
        </h2>
      <form action="update_categorie.php?id=<?=$produit['id']?>" method="post">
              <!-- Contenu -->
          <div class="content">
            <!-- Ajout de produit -->
            <div id="addProductForm" class="product-form">
              <!-- Nom et type-->
                <div class="input-row">
                  <div class="input-group">
                    <div class="mb-3">                     
                      <label for="type" >Nom Categorie</label>                     
                      <input type="text" name="type" class="form-control" required/>                   
                    </div>
                </div>
                </div>
                <input  type="submit" value="Motifier" class="validate-button">
            </div>
          </div>
      </form>
      </br>
<!-- Message de sortie -->
    <?php if ($msg): ?>
    <h5><?=$msg?></h5>
    <?php endif; ?>
</div>

<?=template_footer()?>