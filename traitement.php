<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <?php

    //Récupérer les données saisies par l'utilisateur
    $username = $_POST["username"];
    $password = $_POST["passwords"];

    //Stocker ces données dans des variables de session
    $_SESSION["username"] = $username;
    $_SESSION["passwords"] = $password;
    echo $nom;
    echo $password;
    header("Location: mainPage.php")
    ?>
    
</body>

</html>