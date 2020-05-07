<?php

$categorienummer = $_GET['categorienummer'];
$categorienaam = $_GET['categorienaam'];
if ($categorienummer == '3') {
    echo "Kan categorie 3 niet verwijderen";
    echo "<br>";
    echo "<a href='/categorieVerwijderen.php'>Ga terug naar overzicht</a>";
    exit;

}

// Create connection
$con = mysqli_connect('localhost', 'root', 'root', 'HandigJoh') or die ('Error connecting');
$query = "SELECT productnummer,omschrijving, categorienummer FROM product WHERE categorienummer='$categorienummer'";
$result = mysqli_query($con, $query) or die ('Error querying');
echo '<table>';

while ($row = mysqli_fetch_array($result)) {

    $productnummer = $row['productnummer'];
    $categorienummer = $row['categorienummer'];
    $omschrijving = $row['omschrijving'];


    if ($productnummer) {
        $quer = "UPDATE product SET categorienummer='3' WHERE productnummer = $productnummer";
        $resul = mysqli_query($con, $quer) or die ('Error querying');
    }

    echo "Product " . $productnummer . " " . $omschrijving . " verplaatst naar Algemeen categorie . ";
    echo " <br>";


}
$delete_category_query = "DELETE FROM categorie WHERE categorienummer = '$categorienummer'";
$delete_category_result = mysqli_query($con, $delete_category_query) or die ('Error querying');


echo "Categorie " . $categorienummer . " " . $categorienaam . " Verwijderd ";
echo " <br>";

echo " <a href = '/categorieVerwijderen.php' > Ga terug naar overzicht </a > ";


echo '</table>';






