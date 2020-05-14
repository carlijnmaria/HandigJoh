<html>
<head>
</head>
<body>

<h2>Alle producten</h2>

<?php
require 'config/config.php';

// 2. Kijken in de database
$query = "SELECT productnummer, omschrijving, prijs, categorienummer FROM product";
$result = mysqli_query($con, $query) or die ('Error querying');
echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $productnummer = $row['productnummer'];
    $omschrijving = $row['omschrijving'];
    $prijs = $row['prijs'];
    $categorie = $row['categorienummer'];

    echo '<tr>';
    echo "<td>Productnummer: $productnummer | </td><td>Product: $omschrijving | </td>
    <td>Kosten: € $prijs | </td><td>Te vinden in categorie: $categorie</td>";
    echo '</tr>';

}

echo '</table>';
echo '<hr>';

?>
<h2>Een overzicht bekijken gesorteerd op categorie:</h2>
<a href="gereedschap.php">Zie hier alle producten voor gereedschap</a>
<br>
<a href="veevoer.php">Zie hier alle producten voor veevoer</a>
<br>
<a href="algemeen.php">Zie hier alle producten voor algmeen</a>
<br>
<a href="materiaal.php">Zie hier alle producten voor materiaal</a>
<hr>
<h2>Producten zoeken:</h2>
Om in de producten te zoeken op omschrijving of productnummer <a href="zoekProduct.php">klik hier</a>
<hr>
<h2>Categorie verwijderen:</h2>
<a href="categorieVerwijderen.php">Klik hier</a> om categorieen te verwijderen.
<hr>
<h2>HOME</h2>
<a href="index.php">Terug naar de home pagina</a>
</body>
</html>