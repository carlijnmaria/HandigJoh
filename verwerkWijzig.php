<?php
$productnummer = $_GET['productnummer'];
$omschrijving = $_GET['omschrijving'];
$prijs = $_GET['prijs'];
$categorienummer = $_GET['categorienummer'];

$productnummer = $_GET['productnummer'];
$con = mysqli_connect('localhost', 'root', 'root', 'HandigJoh') or die ('Error connecting');

$query ="UPDATE product ";
$query .= "SET productnummer = '$productnummer', omschrijving = '$omschrijving', prijs = '$prijs', categorienummer = '$categorienummer'";
$query .= "WHERE productnummer = '$productnummer'";

$result = mysqli_query($con, $query) or die ('Error updating');
header("Location: index.php");
