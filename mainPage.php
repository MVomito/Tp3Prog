<!DOCTYPE html>
<html>

<head>
    <title>Prog 3 Tp</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar navbar-warning bg-dark text-center">
    </nav>
    <br><br>

    <div id="section1">
        <h1>Ajouter un produits</h1>
        <form action="crudAdd.php" method="post">
            <div class="champ">
                <label>Nom du Produits:</label>
                <input type="text" name="NomProduits" />
            </div>
            <div class="champ">
                <label>Prix :</label>
                <input type="number" name="prixProduits" />
            </div>
            <div class="champ">
                <label>Date :</label>
                <input type="date" name="dateProduits" />
            </div>
            <div class="champ">
                <input type="submit" name="Sauvegarder" class="btn btn-primary" value="Ajouter" />
            </div>
        </form>
</div>
    <div id="section2">
        <?php
        include "showProduct.php";
        $tableauProduits = showProduct();
        $produitsTotal = 0;
        for ($i = 0; $i < count($tableauProduits); $i++) {
            $produitsTotal = $produitsTotal + $tableauProduits[$i]["prixProduits"];
        }
        
        echo "<h2>Total des dépenses : " . $produitsTotal . "$</h2>";
        echo "<h2>Liste des dépenses</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nom de la dépense</th>";
        echo "<th>Prix de la dépense</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        for ($i = 0; $i < count($tableauProduits); $i++) {
            echo "<tr>";
            echo "<td>" . $tableauProduits[$i]["NomProduits"] . "</td>";
            echo "<td>" . $tableauProduits[$i]["prixProduits"] . "</td>";
            echo "<td><span>";
            echo "<input type=\"button\" onclick=\"location.href='FormulaireModificationDepense.php?id=" . $tableauProduits[$i]["id_produits"] . "&titre=" . $tableauProduits[$i]["NomProduits"] . "&prix=" . $tableauProduits[$i]["prixProduits"] . "'\" \name=\"Modifier\" class=\"btn btn-success\" value=\"Modifier\">";
            echo "<input type=\"button\" onclick=\"location.href='crudDelete.php?id=" . $tableauProduits[$i]["id_produits"] . "'\" \name=\"Supprimer\" class=\"btn btn-danger\" value=\"Supprimer\">";
        }
        ?>

    </section>
</body>

</html>