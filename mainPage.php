<!DOCTYPE html>
<html>

<head>
    <title>Cours PHP</title>
    <Style>
        <?php include "style.css" ?>
    </Style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar  p-3">
        <h5 class="text-dark">TP Maxime Routhier-linteau</h5>
        <div class="justify-content-end">
            <button class="btn btn-danger p-2" onclick="location.href='logout.php'">Deconexion</button>
        </div>
    </nav>
    <div class="container bg-light p-5 m- ">
        <div class="mt-5">
            <h1 class="d-flex justify-content-center">Ajouter une Produit a la liste</h1>
            <h2 class="d-flex justify-content-center m-2">Bonjour Vomito</h2>
        </div>
        <div class="m-3 p-3 d-flex justify-content-center align-items-center">
            <form action="crudAdd.php" method="post" class="d-flex justify-content-center align-items-center">
                <div class="m-2">
                    <label>Nom :</label>
                    <input type="text" name="liste" />
                </div>
                <div class="m-2">
                    <label>Prix</label>
                    <input type="number" name="prix" />
                </div>
                <div class="m-2">
                    <input type="submit" name="ajouter" class="btn btn-success" value="Ajouter" />
                </div>
            </form>
        </div>
        <div>
            <?php
            include "showProduct.php";
            $tables = showProduct();
            echo "<h2 class='d-flex justify-content-center text-center'>Liste Des Produits</h2>";
            echo "<table class='d-flex justify-content-center text-center container' bg-light>";
            echo "<tr>";
            echo "<th class='h3  text-center'>Num</th>";
            echo "<th class='h3 text-center'>Id Produit</th>";
            echo "<th class='h3 text-center'>Prix</th>";
            echo "<th class='h3 text-center'>Date</th>";
            echo "<th class='h3 text-center'>Liste</th>";
            echo "<th class='h3 text-center'>Modifier</th>";
            echo "<th class='h3 text-center'>Suprimer</th>";
            echo "</tr>";

            for ($i = 0; $i < count($tables); $i++) {
                echo "<tr>";
                echo "<td class='text-center m-2'>" . $tables[$i]["id_produits"] . "</td>";
                echo "<td class='text-center m-2'>" . $tables[$i]["liste"] . "</td>";
                echo "<td class='text-center m-2'>" . $tables[$i]["prix"] . "</td>";
                echo "<td class='text-center m-2'>" . $tables[$i]["dates"] . "</td>";
                echo "<td><span>";
                echo "<td><input type=\"button\" onclick=\"location.href='crudUpdate.php?id=" . $tables[$i]["id_produits"] . "&titre=" . $tables[$i]["liste"] . "&prix=" . $tables[$i]["prix"] . "'\" \name=\"Modifier\" class=\"btn btn-primary buttonTablem ml-3 texte-center justify-content-center\" value=\"Modifier\"></td>";
                echo "<td><input type=\"button\" onclick=\"location.href='crudDelete.php?id=" . $tables[$i]["id_produits"] . "'\" \name=\"Supprimer\" class=\"btn btn-danger m-3 text-center buttonTable justify-content-center\" value=\"Supprimer\"></td>";
            }
            ?>
        </div>

        <div class="m-5">
            <iframe class="d-flex justify-content-center" autoplay="1" width="500" height="200" src="https://www.youtube.com/embed/4fndeDfaWCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6 class="d-flex justify-content-center m-3">Tin un ti jam pour ta correction.</h6>
        </div>
    </div>
</body>

</html>