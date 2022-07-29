<?php
include "ConnexionBD.php";

$idProduits = $_GET["id"];

$supprimerProduits = $conn->prepare("
DELETE FROM produits
WHERE idProduits = :idProduits
");

$supprimerProduits->bindParam('idProduits', $idProduits);

$supprimerProduits->execute();

header("Location: mainPage.php");
