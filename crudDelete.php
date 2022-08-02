<?php
include "ConnexionBD.php";

$id_produits = $_GET["id_produits"];

echo "$id_produits";

$supprimerProduits = $conn->prepare("
DELETE FROM produits
WHERE id_produits = :id_produits
");

$supprimerProduits->bindParam('id_produits', $id_produits);

$supprimerProduits->execute();

header("Location: mainPage.php");