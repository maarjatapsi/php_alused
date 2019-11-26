<?php
// kontrollime andmed
//echo '<pre>';
//print_r($GET);
//echo '</pre>';

//arvutusfunktsioonid
function keraRuumala($raadius) {
    $ruumala = 4 * pi() * pow($raadius, 2); // 4 pi raadius ruudus
    return round($ruumala, 2); // ümardame - 2 koma kohta
}

function koonuseRuumala($raadius, $korgus) {
    $pohjaPindala = pi() * pow($raadius, 2); //pi raadius
    return round($pohjaPindala, 2);
}

function silindriRuumala($raadius, $korgus) {
    $pohjaPindala = pi() * pow($raadius, 2); //pi raadius
    return round($pohjaPindala, 2);
}

//arvutame ja väljastame tulemused
//vormi andmed
    $keraRaadius = $_GET['kera-raadius'];
    $koonuseRaadius= $_GET['koonuse-raadius'];
    $koonuseKorgus = $_GET['koonuse-kõrgus'];
    $silindriRaadius = $_GET['silindri-raadius'];
    $silindriKorgus = $_GET['silindri-kõrgus'];

    //arvutused
$keraRuumala = keraRuumala($keraRaadius);
$koonuseRuumala = koonuseRuumala($koonuseRaadius, $koonuseKorgus);
$silindriRuumala = silindriRuumala($silindriRaadius, $silindriKorgus);

// väljasta
echo 'Kera raadiusega '.$keraRaadius.' ruumala = '.$keraRuumala.'.<br>';
echo 'Koonuse raadiusega '.$koonuseRaadius.' ja kõrgusega '.$koonuseKorgus . ' ruumala = ' .$koonuseRuumala. '.<br>';
echo 'Silindri raadiusega ' .$silindriRaadius . ' ja kõrgusega ' . $silindriKorgus . ' ruumala =  ' .$silindriRaadius.' .<br>';
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