<?php
// loome ühendus andmebasiga
function connection($host, $user, $pass, $dbname){
    $link = mysqli_connect($host, $user, $pass, $dbname);
    if($link === false) {
        // veateade probleemi korral
        echo 'Probleem andmebaasi ühendusega!<br>';
        exit;
    }
    //määtame utf-8
    mysqli_set_charset($link, 'utf8');
    return $link; // tagastame edaspidiseks kasutamiseks
}

// suvalise päringu saatmine andmebaasi
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem päringuga <b>'.$sql.'</b><br>';
    }
    // kui $result === true
    return $result;
}


// SELECT, SHOW,DESCRIBE or EXPLAIN sql jaoks
function getDATA($sql, $link){
    $result = query($sql, $link); // saadame pärinu meie funktsiooni abil
    $data = array(); // siin salvestame päringu andmed
    // nii kaua, kui andmed on, loeme need
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row; // ja salvestame meie massiivi
    }
    // kui massiiv on tühi- andmete lugemise probleem
    if(count($data) == 0){
        return false;
    }
    // muidu tagastame loetud andmed
    return $data;
}