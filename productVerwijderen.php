<html>
<head>
</head>
<body>

<?php
require 'config/config.php';

// 2. Kijken in de database
$query = "SELECT * FROM product";
$result = mysqli_query($con, $query) or die ('Error querying');
echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $productnummer = $row['productnummer'];
    $omschrijving = $row['omschrijving'];
    $prijs = $row['prijs'];
    $categorienummer = $row['categorienummer'];


    echo '<tr>';
    echo "<td>Productnummer: $productnummer</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Product: $omschrijving</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Prijs: $prijs euro</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Categorie: $categorienummer </td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>";
    echo '<a href="verwijder.php?productnummer=' . $productnummer . '">Verwijder</a>';
    echo "</td>";
    echo '</tr>';

}

echo '</table>';

?>
<br>
<a href="index.php">Terug naar de home pagina</a>
</body>