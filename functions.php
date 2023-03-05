<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phpproduit';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
$pdo = pdo_connect_mysql();
$query = $pdo->prepare('SELECT * FROM categorie');
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
function template_header($title) {
	echo <<<EOT
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>$title</title>
			<link href="style.css" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
			</head>
			<body>
			<nav class="navtop">
			<div>
			<h1>Qr_Boulanger</h1>
			<a href="index.php"></i>Produit</a>
			<a href="read_categorie.php"></span>Catégories</a>
			</div>
			</nav>
	EOT;
	}
	function template_footer() {
	echo <<<EOT
		</body>
	</html>
	EOT;
	}
	?>