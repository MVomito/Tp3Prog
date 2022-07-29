<!DOCTYPE html>
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
    <div>
        <div class="accueilDiv">
            <form class="accueilForm" method="post" action="validUtilisateur.php">
                <h1 class="mainTitle">Se connecter</h1>
                <label>Nom d'utilisateur</label>
                <input class="input" type="text" name="username" placeholder="Votre nom d'utilisateur" />
                <label>Mot de passe </label>
                <input class="input" type="password" name="passwords" placeholder="Votre mot de passe" />
                <div class="btnDiv">
                    <input type="submit" name="Envoyer" value="Envoyer" class="btnSubmit" />
                    <button type="submit" name="Envoyer" value="Créer un compte" class="btnCreate"><a href="signUp.php">Créer un compte</a></button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer">WEBA21LC-TP</div>
</body>

</html>