<?php
require_once('config.php');
function conn($host, $user, $pass, $db) {
    $link = mysqli_connect($host, $user, $pass, $db);
    if (!$link) {
        print('<i>ERROR: ' .mysqli_connect_error() .'</i>');
        exit;
    }
    return $link;
}
function query($link, $sql) {
    $res = mysqli_query($link, $sql);
    if ($res) return $res;
    else {
        print('<i>ERROR</i>');
        exit;
    }
}
?>