<?php
include "ConnexionBD.php";

$liste = $_POST["liste"];
$prix = $_POST["prix"];

if (empty($liste)) {
    echo "<script language='javascript'> alert(' ')</script>";
  } else {

    $ajouterProduits = $conn->prepare("
    INSERT INTO produits (liste, prix)
        VALUES (:liste, :prix)
");

$ajouterProduits->bindParam('liste', $liste);
$ajouterProduits->bindParam('prix', $prix);

$ajouterProduits->execute();

header("Location: mainPage.php");
  }

