<?php
function showProduct() {

    try{
        include "ConnexionBD.php";

        $festchListProduct = $conn->prepare("
        SELECT * FROM produits
        ");

        $festchListProduct->execute();
        return $festchListProduct->fetchAll();

    } catch (PDOException $e) {
        echo "Erreur : " . $e();
    }
}