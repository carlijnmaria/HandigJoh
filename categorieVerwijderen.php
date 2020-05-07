<html>
<head>
</head>
<body>

<?php
require 'config/config.php';

// 2. Kijken in de database
$query = "SELECT * FROM categorie";
$result = mysqli_query($con, $query) or die ('Error querying');
echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $categorienummer = $row['categorienummer'];
    $omschrijving = $row['omschrijving'];


    echo '<tr>';
    echo "<td>Categorienummer: $categorienummer</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td>Omschrijving: $omschrijving</td>";
    echo '</tr>';

    echo '<tr>';
    echo "<td>";
    if ($categorienummer != '3') {
        echo '<a href="verwijderC.php?categorienummer=' . $categorienummer . '.&categorienaam=' . $omschrijving . '">Verwijder</a>';
    }

    echo "</td>";
    echo '</tr>';

}

echo '</table>';

?>
<br>
<a href="index.php">Terug naar de home pagina</a>
</body>