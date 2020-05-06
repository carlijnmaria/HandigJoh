<?php

//POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];

//DATA IN DATABASE STOPPEN
//1. Verbinding maken met database
$con = mysqli_connect('localhost', 'root', 'root', 'HandigJoh') or die ('Error connecting');
//2. Opdracht (query) schrijven voor de database
$query = "INSERT INTO klant VALUES (0, '$voornaam', '$tussenvoegsel', '$achternaam')";
//3. Query uitvoeren
$result = mysqli_query($con, $query) or die ('Error querying.');
//4. Verbinding verbreken
mysqli_close($con);

//BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'De volgende gegevens zijn toegevoegd aan de database: <br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
} else {
    echo 'Sorry er iets misgegaan. Probeer het opnieuw';
}

echo '<a href="index.php">Handig Joh</a>';
