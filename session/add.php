<?php

// andmebaasiga töötamiseks vajalik info
require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud functionid

$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);


// kui vormi kaudu on andmed saadetud
if(!empty($_POST['nimi']) and !empty($_POST['parool'])){
    $nimi = $_POST['nimi'];
    $parool = $_POST['parool'];
    // lisame kasutaja andmebaasi
    $sql = 'INSERT INTO kasutajad SET '.
        'nimi="'.$nimi.'", '.
        'parool="'.md5($parool).'", '.
        'roll=1';
    $result = query($sql, $ikt);
    // kui selline kasutaja on olemas andmebaasis
    if($result !== false){
        // kontrollime andmed andmebaasis
        $sql = 'SELECT * FROM kasutajad WHERE nimi="'.$nimi.'" AND parool="'.md5($parool).'"';
        $result = getData($sql, $ikt);
        // teeme sessioon lahti
        session_start();
        $_SESSION['kasutaja'] = $result[0]['nimi'];
        header('Location: index.php');
    } else {
        echo 'probleem sessiooniga';
    }
} else {
    // väljasta registreerimis vorm
    echo
    '<form method="post">
    Kasutajanimi: <input type="text" name="nimi"><br>
    Parool: <input type="password" name="parool"><br>
    <input type="submit" value="Registreeri">
    <hr>
  </form>';
}