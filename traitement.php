    <?php
    session_start();  
    $username = $_POST["username"];
    $passwords = $_POST["passwords"];

    $_SESSION["username"] = $username;
    $_SESSION["passwords"] = $passwords;

    header("Location: mainPage.php");