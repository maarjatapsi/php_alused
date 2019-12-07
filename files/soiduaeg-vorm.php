<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sõiduaeg</title>
</head>
<body>
    <form action="soiduaeg.php" method="get">
        <h3>Lisa sõiduaeg:</h3>
        <label for="algus-aeg">Algus:</label>
        <input type="text" name="algus-aeg" id="algus-aeg" placeholder="HH:MM">
        <br>
        <label for="lopp-aeg">Lõpp: </label>
        <input type="text" name="lopp-aeg" id="lopp-aeg" placeholder="HH:MM">
        <input type="submit" value="Salvesta faili">
    </form>
</body>
</html>
