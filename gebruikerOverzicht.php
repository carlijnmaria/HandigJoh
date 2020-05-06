<!doctype html>
<html lang="en">
<head>
    <title>Gebruikers overzicht</title>
</head>
<body>
<h2>Alle gebruikers</h2>
<?php

// 1. Connectie maken met de database
$con = mysqli_connect('localhost', 'root', 'root', 'HandigJoh') or die ('Error connecting');

// 2. Kijken in de database en alle emailadressen tevoorschijn halen
$query = "SELECT * FROM klant";
$result = mysqli_query($con, $query) or die ('Error querying');
echo '<table>';

// 3. Loopje waarin alle emailadressen in beeld worden gebracht
while ($row = mysqli_fetch_array($result)) {

    $id = $row['klantnummer'];
    $voornaam = $row['voornaam'];
    $tussenvoegsel = $row['tussenvoegsel'];
    $achternaam = $row['achternaam'];


    echo '<tr>';
    echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td>";
    echo '<td>';
    echo '</tr>';
}

echo '</table>';


?>

</body>
</html>