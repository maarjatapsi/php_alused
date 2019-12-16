<?php
require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud functionid

require_once 'ui.php'; // loeme väljundfunktsioonid

// teeme katsed
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);
// lause andmete lisamiseks
$sql = 'insert into kliendid set '.
    'enimi="'.$_GET['enimi'].'", '.
    'pnimi ="Eegreid", '.
    'kontakt="karin@eegreid.com"';
$result = query($sql, $ikt);

if($result) {
    echo 'Anmebaasi on lisatud '.mysqli_affected_rows($ikt).' rida<br>';
    echo 'Viimatud listud ID: '.mysqli_insert_id($ikt).' rida<br>';
}