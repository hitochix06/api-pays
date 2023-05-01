<?php
require 'vendor/autoload.php';
function pdo_connect_mysql()
{
	$DATABASE_HOST = 'db5012870098.hosting-data.io';
	$DATABASE_USER = 'dbu5674836';
	$DATABASE_PASS = '0QZqa&oq6?YIi@o7v?Ku';
	$DATABASE_NAME = 'dbs10808034';
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

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');

$twig = new \Twig\Environment($loader, [
	'cache' => __DIR__ . '/cache',
	'debug' => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
