<?php

if(empty($_SESSION['kasutaja'])) {

    echo '<a href="add.php">Registreeri kasutajaks</a>';
    echo '&nbsp;&nbsp;&nbsp;';
    echo '<a href="login.php">Logi sisse</a>';
} else {
    echo 'Tere tulemast, '.$_SESSION['kasutaja'].'<br>';
    echo '<a href="logout.php">Logi välja</a>';
}