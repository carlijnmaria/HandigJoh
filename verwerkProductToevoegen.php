<?php
require 'config/config.php';

//POST-ARRAY UITLEZEN
$omschrijving = $_POST['omschrijving'];
$prijs = $_POST['prijs'];
$categorie = $_POST['categorie'];

//2. Opdracht (query) schrijven voor de database
$query = "INSERT INTO product VALUES (0, '$omschrijving', '$prijs', '$categorie')" or die ("Error querying");

//3. Query uitvoeren
$result = mysqli_query($con, $query) or die ('Error querying.');

//4. Verbinding verbreken
mysqli_close($con);

//BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'De volgende gegevens zijn toegevoegd aan de database: <br>';
    echo $omschrijving . '<br>';
    echo $prijs . '<br>';
    echo $categorie . '<br>';
} else {
    echo 'Sorry er iets misgegaan. Probeer het opnieuw';
}
