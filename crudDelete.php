<?php
include "ConnexionBD.php";

$id_produits = $_GET["Supprimer"];

$supprimerProduits = $conn->prepare("
DELETE FROM produits
WHERE Supprimer = :id_produits
");

$supprimerProduits->bindParam('Supprimer', $id_produits);

$supprimerProduits->execute();

header("Location: mainPage.php");
