<?php
include "ConnexionBD.php";

$username = $_POST["username"];
$passwords = $_POST["passwords"];
$checkUser = $conn->prepare(
    "SELECT * FROM utilisateur 
         WHERE username =:username AND passwords = :passwords"
);

$checkUser->bindParam(':username', $username,);
$checkUser->bindParam(':passwords', $passwords);
$checkUser->execute();
$account = $checkUser->fetch();

if ($account) {
    echo "<script language='javascript'> alert('Conexion au compte')</script>";
    header("Location: mainPage.php");
} else if ($username = $_POST["passwords"] == null) {

    echo "<script language='javascript'> alert('Mauvais mot de passe veuillez esseyer encore')</script>";
} else {

    echo "<script language='javascript'> alert('Erreur veuillez esseyer encore')</script>";
}
