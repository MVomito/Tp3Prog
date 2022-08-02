<?php
include "ConnexionBD.php";

$id_produits = $_GET["id"];
$liste = $_POST["liste"];
$prix = $_POST["prix"];

$modifierProduits = $conn->prepare("
UPDATE produits
SET liste = :liste, prix = :prix
WHERE id = :id_produits
");

$modifierProduits->bindParam('id', $id_produits);
$modifierProduits->bindParam('liste', $liste);
$modifierProduits->bindParam('prix', $prix);

$modifierProduits->execute();

header("Location :mainPage.php");