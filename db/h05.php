<?php

require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud fun-onid
require_once 'ui.php'; // loeme väljundfunktsioonid
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);
// vorm andmete sisestamiseks
lisaKlient();
// kui vajalikud andmed on olemas
if(isset($_GET['enimi']) && isset($_GET['pnimi'])) {
    // lause andmete sisestamiseks
    $sql = 'INSERT INTO kliendid SET ' .
        'enimi="' . $_GET['enimi'] . '", ' .
        'pnimi="' . $_GET['pnimi'] . '", ' .
        'kontakt="' . $_GET['kontakt'] . '"';
    $result = query($sql, $ikt);
    if ($result) {
        echo 'Andmebaasi on lisatud ' . mysqli_affected_rows($ikt) . ' rida<br>';
        echo 'Viimati lisatud ID: ' . mysqli_insert_id($ikt) . '<br>';
    }
}