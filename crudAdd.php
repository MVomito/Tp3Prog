<?php
include "ConnexionBD.php";

$NomProduits = $_POST["NomProduits"];
$prixProduits = $_POST["prixProduits"];
$datesProduits = $_POST["dateProduits"];

$ajouterProduits = $conn->prepare("
INSERT INTO produits (liste, prix, dates)
VALUES (:NomProduits, :prixProduits, :dateProduits)
");

$ajouterProduits->bindParam('NomProduits', $NomProduits);
$ajouterProduits->bindParam('prixProduits', $prixProduits);
$ajouterProduits->bindParam('dateProduits', $datesProduits);

$ajouterProduits->execute();

header("Location: mainPage.php");
?>