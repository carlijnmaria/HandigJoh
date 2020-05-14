<?php
require 'config/config.php';

?>


<html>
<head>
    <title>Product toevoegen</title>
</head>
<body>

<h2>Voeg producten toe</h2>
<a href="index.php">Klik hier om terug te keren naar de homepage</a>
<br><br>

<form method="POST" action="verwerkProductToevoegen.php">
    <label>Omschrijving: <input type="text" name="omschrijving" pattern=".{4,}"   required title="Minimaal 4 letters verplicht"</label>
    <br>
    <label>Prijs: <input type="text" name="prijs" required></label>
    <br>
    <label>Categorie: <input type="number" name="categorie"></label>
    <br><br>
<!--    Met de gegeven database is het niet mogelijk om een foto toe te voegen-->
    <input type="submit" name="submit">
</form>

<br>
<a href="productWijzigen.php">Wijzig producten</a>
<br>
<a href="productVerwijderen.php">Verwijder producten</a>
</body>
</html>

