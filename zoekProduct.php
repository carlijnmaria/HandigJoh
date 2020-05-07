<?php
require 'config/config.php';

$output = '';

//collect
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

    $query = mysqli_query($con, "SELECT * FROM product WHERE omschrijving LIKE '%$searchq%' OR productnummer LIKE '%$searchq%'") or die ("Error querying");
    $count = mysqli_num_rows($query);
    if ($count == 0) {
        $output = 'Er zijn geen producten gevonden';

    } else {
        while($row = mysqli_fetch_array($query)) {
            $omschrijving = $row['omschrijving'];
            $productnummer = $row['productnummer'];

            $output .= '<div>'.$omschrijving.' '.$productnummer.'</div>';

        }
    }
}
?>

<html>
<head>
    <title>Zoeken op product</title>
</head>
<body>
<form action="zoekProduct.php" method="POST">
    <input type="text" name="search"/>
    <input type="submit" value="Zoeken"/>
</form>
</body>
</html>

<?php
    print("$output");
?>