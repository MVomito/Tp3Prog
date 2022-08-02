<?php
include "ConnexionBD.php";

$id_produits = $_GET["id"];
$liste = $_POST["titre"];
$prix = $_POST["prix"];

$modifierProduits = $conn->prepare("
UPDATE produits
SET liste = :liste, prix = :prix
WHERE id_produits = :id_produits
");

$modifierProduits->bindParam('id_produits', $id_produits);
$modifierProduits->bindParam('liste', $liste);
$modifierProduits->bindParam('prix', $prix);

$modifierProduits->execute();

header("Location :mainPage.php");