<?php

$nimi = $_GET['nimi'];
$nimi = strtolower($nimi); // nimi on ainult väikestes tähtedes
$nimi = ucfirst($nimi); // esimene täht on suur
echo 'Tere, '.$nimi.'!'; // moodustame ja väljastame tervituse
echo '<hr>';
$sisend = $_GET['sisend'];
for($indeks = 0; $indeks < strlen($sisend); $indeks++) {
    $symbol = strtoupper($sisend[$indeks]); // muudame tähed suureks
    echo $symbol. '.'; // väljastame koos punktiga
}
echo '<hr>';
//Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
$roppSonad =array('noob', 'kurat');
$lause = $_GET['lause'];
$lause = strtolower($lause);
foreach ($roppSonad as $roppSona){
    $asendus = '';
    for($kord = 0; $kord < strlen($roppSona); $kord++){
$asendus .= '*';
}
$roppSonaIndex = strpos($lause, $roppSona, 0);
if($roppSonaIndex !== false) {
$lause = substr_replace($lause, $asendus, $roppSonaIndex, strlen($roppSona));
}
}
$lause = ucfirst($lause);
echo $lause;
echo '<hr>';

// Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
$nimiJaPerenimi = $_GET['nimijaperenimi'];
$asenduss = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'a',
    'Ö' => 'o',
    'Ü' => 'u',
    'Õ' => 'o',
);
foreach ($asendus as $otsi=> $asenda) {
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);

}
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ', 0);
$nimi = strtolower(substr($nimiJaPerenimi, 0, $tyhikuIndeks));
$nimiJaPerenimi = substr($nimiJaPerenimi, $tyhikuIndeks+1);
$tyhikuIndeks = strpos($nimiJaPerenimi, '');
$perenimi = strtolower(substr($nimiJaPerenimi,$tyhikuIndeks));
$email = $nimi.'.'.$perenimi.'@khk.ee';
echo $email;
