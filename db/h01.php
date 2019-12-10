<?php

require_once 'config.php'; // loeme andmebaasi conf sisse
require_once 'db_fnc.php'; // loeme andmebaasi töötlusega seotud functionid

// teeme katsed
$ikt = connection(HOSTNAME, USERNAME, USERPASS, DBNAME);

// katsetame sql
// $sql = 'RENAME TABLE `tapsimaa_db`.`koolid2015` TO `tapsimaa_db`.`koolid`';
// $result = query($sql, $ikt);
$sql = 'SELECT * FROM koolid';
$result = getData($sql, $ikt);
echo  '<pre>';
print_r($result);