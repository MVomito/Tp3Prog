<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <?php

    $username = $_POST["username"];
    $password = $_POST["passwords"];

    $_SESSION["username"] = $username;
    $_SESSION["passwords"] = $password;
    echo $nom;
    echo $password;
    header("Location: mainPage.php")
    ?>
    
</body>

</html>