<?php

$productnummer = $_GET['productnummer'];
$con = mysqli_connect('localhost', 'root', 'root', 'HandigJoh') or die ('Error connecting');
$query ="DELETE FROM product WHERE productnummer = '$productnummer'";
$result = mysqli_query($con, $query) or die ('Error deleting');
header("Location: index.php");