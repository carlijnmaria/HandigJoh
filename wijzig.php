<html>
<head>
    <title>Edit data</title>
</head>
<body>
<?php
$productnummer = $_GET['productnummer'];
$omschrijving = $_GET['omschrijving'];
$prijs = $_GET['prijs'];
$categorienummer = $_GET['categorienummer'];


echo "<h2>Edit id $productnummer</h2>";
?>

<form method="get" action="verwerkWijzig.php">
    <input type="hidden" name="productnummer" value="<?php echo $productnummer; ?>">
    <label>Omschrijving:
        <input type="text" name="omschrijving" value="<?php echo $omschrijving; ?>">
    </label>
    <br>
    <label>Prijs:
        <input type="text" name="prijs" value="<?php echo $prijs; ?>">
    </label>
    <br>
    <label>Categorienummer:
        <input type="text" name="categorienummer" value="<?php echo $categorienummer; ?>">
    </label>
    <br>
    <input type="submit" name="submit" value="Opslaan">
</form>

</body>
</html>
