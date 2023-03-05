<?php
include 'functions.php';

$pdo = pdo_connect_mysql();

$query = $pdo->prepare('select * from produits where id = ?');
$query->execute([$_GET['id']]);
$rslt = $query->fetch(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('DELETE FROM produits WHERE id = ?');
$stmt->execute([$_GET['id']]);

header('Location: index.php');