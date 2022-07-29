<?php
include "ConnexionBD.php";

$idDepense = $_GET["id"];
$titreDepense = $_POST["titreDepense"];
$prixDepense = $_POST["prixDepense"];

$modifierDepense = $conn->prepare("
UPDATE Depense
SET titreDepense = :titreDepense, prixDepense = :prixDepense
WHERE idDepense = :idDepense
");

$modifierDepense->bindParam('idDepense', $idDepense);
$modifierDepense->bindParam('titreDepense', $titreDepense);
$modifierDepense->bindParam('prixDepense', $prixDepense);

$modifierDepense->execute();

header("Location:Accueil.php");
?>