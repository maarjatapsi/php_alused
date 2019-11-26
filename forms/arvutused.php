<?php
// kontrollime andmed
echo '<pre>';
print_r($GET);
echo '</pre>';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Arvutused</h1>
<form action="arvutused.php" method="get">
    <h2>Kera</h2>
    Kera raadius <input type="text" name="kera-raadius"><br><hr>
    <h2>Koonus</h2>
    Koonuse põhja raadius <input type="text" name="koonuse-raadius"><br>
    Koonuse kõrgus <input type="text" name="koonuse-kõrgus"><br><hr>
    <h2>Silinder</h2>
    Silindri põhja raadius<input type="text" name="silindri-raadius"><br>
    Silindri kõrgus <input type="text" name="silindri-kõrgus"><br><hr>
    <input type="submit" value="Saada">
</form>
</body>
</html>