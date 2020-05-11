<html>
<head>
</head>
<body>

<h2>Al het materiaal</h2>

<?php
require 'config/config.php';

// 2. Kijken in de database
$query = "SELECT productnummer, omschrijving, prijs FROM product WHERE categorienummer='4'";
$result = mysqli_query($con, $query) or die ('Error querying');
echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $productnummer = $row['productnummer'];
    $omschrijving = $row['omschrijving'];
    $prijs = $row['prijs'];

    echo '<tr>';
    echo "<td>Product: $productnummer</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Product: $omschrijving</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>$prijs euro</td>";
    echo '</tr>';

}

echo '</table>';

?>
<br>
<a href="overzichtProducten.php">Terug naar producten overzicht</a>
<br>
<a href="index.php">Terug naar de home pagina</a>

</body>
</html>