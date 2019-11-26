<?php
?>

<h1>Tellimine</h1>
<?php
// serveri andmete kotroll
//    var_dump($_GET);
//    echo '<pre>';
//print_r($_GET);
//echo '</pre>';
//lisab vormist saadud andmed muutujasse
$toode1 = $_GET['t1'];
$toode2 = $_GET['t2'];
$toode3 = $_GET['t3'];

echo 'Toode 1: '.$toode1.'tk<br>';
echo 'Toode 2: '.$toode2.'tk<br>';
echo 'Toode 3: '.$toode3.'tk<br>';