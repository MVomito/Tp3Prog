<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark justify-content-end p-3">
        <button class="btn btn-danger p-2" onclick="location.href='logout.php'">Deconexion</button>
    </nav>
    <div class="mt-5">
        <h1 class="d-flex justify-content-center">Ajouter une Produit a la liste</h1>
        <h2 class="d-flex justify-content-center m-2">Bonjour <?php echo "$username"; ?></h2>
    </div>
    <div class="m-5 p-3 d-flex justify-content-center align-items-center">
        <form action="crudAdd.php" method="post" class="d-flex justify-content-center align-items-center"  >
            <div class="m-2">
                <label>Nom :</label>
                <input type="text" name="liste" />
            </div>
            <div class="m-2">
                <label>Prix</label>
                <input type="number" name="prix" />
            </div>
            <div class="m-2">
                <input type="submit" name="Sauvegarder" class="btn btn-primary" value="Ajouter" />
            </div>
        </form>
</div>
    <div>
        <?php
        include "showProduct.php";
        $tables = showProduct();

        echo "<h2 class='d-flex justify-content-center'>Liste Des Produits</h2>";
        echo "<table class='d-flex justify-content-center'>";
        echo "<tr>";
        echo "<th class='m-4 h2' >Num</th>";
        echo "<th class='m-4 h2'>Id Produit</th>";
        echo "<th class='m-4 h2'>Liste</th>";
        echo "<th class='m-4 h2'>Prix</th>";
        echo "</tr>";
        echo "</table>";
        
        for ($i = 0; $i < count($tables); $i++) {
            echo "<tr>";
            echo "<td>" . $tables[$i]["liste"] . "</td>";
            echo "<td>" . $tables[$i]["prix"] . "</td>";
            echo "<td><span>";
            echo "<input type=\"button\" onclick=\"location.href='crudUpdate.php?id=" . $tables[$i]["id_produits"] . "&titre=" . $tables[$i]["liste"] . "&prix=" . $tables[$i]["prix"] . "'\" \name=\"Modifier\" class=\"btn btn-success\" value=\"Modifier\">";
            echo "<input type=\"button\" onclick=\"location.href='crudDelete.php?id=" . $tables[$i]["id_produits"] . "'\" \name=\"Supprimer\" class=\"btn btn-danger\" value=\"Supprimer\">";
        }
        ?>

    </div>
</body>

</html>