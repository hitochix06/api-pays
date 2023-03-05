<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;
$stmt = $pdo->prepare('SELECT * FROM categorie ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
$categorie = $stmt->fetchAll(PDO::FETCH_ASSOC);
$num_categorie = $pdo->query('SELECT COUNT(*) FROM categorie')->fetchColumn();
?>
<?=template_header('Read')?>

<div class="content read">
	<a href="create_categorie.php" class="create-contact" >Ajouter Catégorie </a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Catégorie</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorie as $categorie): ?>
            <tr>
                <td><?=$categorie['id']?></td>
                <td> <?=$categorie['type']?></td>
            
                <td class="actions">
                    <a href="update_categorie.php?id=<?=$categorie['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete_categorie.php?id=<?=$categorie['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read_categorie.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_categorie): ?>
		<a href="read_categorie.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>


<?=template_footer()?>