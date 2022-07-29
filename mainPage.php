<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark ">
        <button class="btn btn-danger">Deconexion</button>
    </nav>
    <br><br>
    <div class="m-2 p-3">
        <h1>Ajouter une Produit a la liste</h1>
        <form action="crudAdd.php" method="post">
            <div class="champ">
                <label>Liste:</label>
                <input type="text" name="liste" />
            </div>
            <div class="champ">
                <label>Prix</label>
                <input type="number" name="prix" />
            </div>
            <div class="champ">
                <input type="submit" name="Sauvegarder" class="btn btn-primary" value="Ajouter" />
            </div>
        </form>
</div>
    <div>
        <?php
        include "showProduct.php";
        $tables = showProduct();

        echo "<h2>Liste Des Produits</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>liste</th>";
        echo "<th>Prix</th>";
        echo "</tr>";
        echo "</table>";

        for ($i = 0; $i < count($tables); $i++) {
            echo "<tr>";
            echo "<td>" . $tables[$i]["liste"] . "</td>";
            echo "<td>" . $tables[$i]["prix"] . "</td>";
            echo "<td><span>";
            echo "<input type=\"button\" onclick=\"location.href='crudAdd.php?id=" . $tables[$i]["id_produits"] . "&titre=" . $tables[$i]["liste"] . "&prix=" . $tables[$i]["prix"] . "'\" \name=\"Modifier\" class=\"btn btn-success\" value=\"Modifier\">";
            echo "<input type=\"button\" onclick=\"location.href='crudDelete.php?id=" . $tables[$i]["id_produits"] . "'\" \name=\"Supprimer\" class=\"btn btn-danger\" value=\"Supprimer\">";
        }
        ?>

    </div>
</body>

</html>