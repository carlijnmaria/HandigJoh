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
    <label>Omschrijving: <input type="text" name="omschrijving"></label>
    <br>
    <label>Prijs: <input type="text" name="prijs"></label>
    <br>
    <label>Categorie: <input type="number" name="categorie"></label>
    <br><br>
    <input type="submit" name="submit">
</form>

<br>
<a href="productWijzigen.php">Wijzig producten</a>

</body>
</html>

