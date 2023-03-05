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
?>
<?=template_header('Create')?>
  <!-- Conteneur principal -->
  <div id="mainContainer">
    <div class="form">
      <!-- Contenu principal -->
      <main class="main-content">
        <!-- En-tête -->
        <div class="heading">
          <span class="material-icons"> add </span>
          Ajouter un Catégorie
        </div>
        <form action="create_categorie.php" method="post">
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
              <input  type="submit" value="Crée" class="validate-button">
            </form>
            </br>
            <!-- Message de sortie -->
            <?php if ($msg): ?>
            <h5><?=$msg?></h5>
            <?php endif; ?>
</div>
<?=template_footer()?>