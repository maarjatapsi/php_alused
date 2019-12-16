<?php

require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid
require_once 'ui.php'; // loeme väljundfunktsioonid
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);
//Andmete kustutamine
if(!empty($_GET['kustutaID'])){
    $id = $_GET['kustutaID'];
    $sql = 'DELETE FROM kliendid WHERE id="'.$id.'"';
    $result = query($sql, $ikt);
    if($result) {
        header('Location: '.$_SERVER['PHP_SELF']);
    }
}
// küsime andmed andmebaasist
$sql = 'SELECT * FROM kliendid';
$result = getData($sql, $ikt);
// väljastame andmed
table06($result, array('Eesnimi', 'Perenimi', 'Kontakt', ''));