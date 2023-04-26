<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Vérifier que le code de produi$produit existe
if (isset($_GET['id'])) {
    // Sélectionnez l’enregistrement qui sera supprimé.
    $stmt = $pdo->prepare('SELECT * FROM categorie WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$produit) {
        exit('Le produit n’existe pas avec cet ID !');
    }
    // S’assurer que l’utilisateur confirme la suppression

    // L’utilisateur a cliqué sur le bouton « Oui », supprimer l’enregistrement.
    $stmt = $pdo->prepare('DELETE FROM categorie WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $msg = 'Vous avez supprimé le produit !';

    //code qui permet  envoi sur la page read.php
    header('location:read_categorie.php');
} else {
    exit('Aucune pièce d’identité indiquée!');
}
