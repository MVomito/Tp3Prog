<?php
include "ConnexionBD.php";
   $username = $_POST["username"];
    $passwords = $_POST["passwords"];
    $name = $_POST["name"];

    $insertionUtilisateur = $conn->prepare(
        "INSERT INTO utilisateur (username, passwords, name)
         VALUES (:username, :passwords, :name)"
    );

    $insertionUtilisateur->bindParam(':username', $username);
    $insertionUtilisateur->bindParam(':passwords', $passwords);
    $insertionUtilisateur->bindParam(':name', $name);
    $insertionUtilisateur->execute();
    
    echo "<script language='javascript'> alert('Vous avez creer votre compte')</script>";
    
    header("Location: index.php") 
    ?>
