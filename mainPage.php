<!DOCTYPE html>
<html>

<head>
    <title>Prog 3 Tp</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
</head>

<body>
    <div class="container-fluid">

        <div class="navbar navbar-warning bg-dark text-center"></div>
    </div>
    <br><br>

    <div id="section1" class="container ">
        <div class="row m-2 p-3">
            <h1 class="mr-5">Ajouter un produits</h1>
            <form action="crudAdd.php" method="post" class="row d-flex justify-content-evenly p-2 align-items-center">
                <div class=" col-2 p-2 mx-1 align-items-center">
                    <label>Nom du Produits:</label>
                    <input type="text" name="NomProduits" placeholder="NomProduits" />
                </div>
                <div class=" col-2 p-2 mx-1">
                    <label>Prix :</label>
                    <input type="number" name="prixProduits" placeholder="prixProduits" />
                </div>
                <div class=" col-2 p-2 mx-1">
                    <label>Date :</label>
                    <input type="date" name="dateProduits" placeholder="dateProduits" />
                </div>
                <div class="champ pt-2 mx-1 mt-4" >
                    <input type="button" name="ajouter" class="btn btn-primary" value="Ajouter" />
                </div>
                <div class="champ pt-2 mx-1 mt-4">
                    <input type="button" name="modifier" class="btn btn-warning" value="Modifier" />
                </div>
                <div class="champ pt-2 mx-1 mt-4">
                    <input type="button" name="delete" class="btn btn-danger" value="delete" />
                </div>
        </div>
        <div class="row m-2">
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
            echo "<input type=\"button\" onclick=\"location.href='crudUpdate.php?id=" . $tableauProduits[$i]["id_produits"] . "&titre=" . $tableauProduits[$i]["NomProduits"] . "&prix=" . $tableauProduits[$i]["prixProduits"] . "'\" \name=\"Modifier\" class=\"btn btn-success\" value=\"Modifier\">";
            echo "<input type=\"button\" onclick=\"location.href='crudDelete.php?id=" . $tableauProduits[$i]["id_produits"] . "'\" \name=\"Supprimer\" class=\"btn btn-danger\" value=\"Supprimer\">";
        }
        ?>

        </section>
</body>

</html>