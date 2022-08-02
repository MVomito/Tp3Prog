<!DOCTYPE html>
<?php include "ConnexionBD.php"; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="">
        <div class="accueilDiv">
            <form class="accueilForm " method="post" action="index.php">
                <h1 class=" text-center p-4 m-2">Se connecter</h1>
                <label>Nom d'utilisateur :</label>
                <input class="input" type="text" name="username" placeholder="Votre nom d'utilisateur" />
                <label>Mot de passe :</label>
                <input class="input" type="password" name="passwords" placeholder="Votre mot de passe" />
                <div class="btnDiv d-flex flex-row m-3">
                    <input type="submit" name="submit" value="Envoyer" class="btnSubmit btn-success m-2" />
                    <input type="submit" name="creer" value="S'inscire" class="btnCreate btn-info m-2"/>
                </div>
            </form>
            <?php

            if (isset($_POST['creer'])) {
                header("location: signUp.php");
            }

            if (isset($_POST['submit'])) {
                if (empty($_POST["username"]) || empty($_POST["passwords"])) {
                    echo "<script language='javascript'> alert('Erreur veuillez Resseyer ')</script>";
                }

                $username = $_POST["username"];
                $passwords = $_POST["passwords"];

                $checkUser = $conn->prepare(
                    "SELECT * FROM utilisateur 
                    WHERE username =:username AND passwords = :passwords"
                );

                $checkUser->bindParam(':username', $username,);
                $checkUser->bindParam(':passwords', $passwords);
                $checkUser->execute();
                $account = $checkUser->fetchAll();

                if ($account) {
                    echo "<script language='javascript'> alert('Conexion au compte Reussi nOyCe (;')</script>";
                    header("location: traitement.php");
                } else {
                    echo "<script language='javascript'> alert('Vous n'avez pas de Compte (;')</script>";
                }
            }

            ?>
        </div>
    </div>
    <div class="footer container-fluid p-4">WEBA21LC-TP</div>
</body>

</html>