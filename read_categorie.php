<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;
$stmt = $pdo->prepare('SELECT * FROM categorie ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
$categs = $stmt->fetchAll(PDO::FETCH_ASSOC);
$num_categorie = $pdo->query('SELECT COUNT(*) FROM categorie')->fetchColumn();


echo $twig->render("read_categorie.twig", array("categories" => $categs, "records_per_page" => $records_per_page, "page" => $page, "num_categorie" => $num_categorie));
