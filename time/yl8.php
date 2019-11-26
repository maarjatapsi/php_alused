<?php
echo '<h3>Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31</h3>';
echo date('d.m.Y G:i' , time());
echo '<h3>Kuva tänane eestikeelne nädalapäev, N: kolmapäev</h3>';
// päevade massiiv
$nadal= array(1=>'esmaspäev', 2=>'teisipäev',3=> 'kolmapäev', 4=>'neljapäev', 5=>'reede', 6=>'laupäev', 7=>'pühapäev');
//kuupäevad massiividesse
$paevaNumber = date('N');
//päeva väljastamine
foreach ($nadal as $number=>$nimetus) {
    if($number == $paevaNumber){
        echo $nadal[$number].'<br>';
    }
}
echo '<h3>Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev</h3>';
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'. ' .$kuu.' '.$aasta.' ';

foreach ($nadal as $number=>$nimetus) {
    if($number == $paevaNumber){
        echo $nadal[$number].'<br>';
    }
}
echo '<h3>Leia mitu päeva on jäänud järgmise jaanipäevani.</h3>';
//aasta on hetkel + 1 -> järgmine aasta
$jargmineAasta = date('Y')+1;
//paneme jaanipäeva ajatempli
$jaaniPaev = mktime(0,0,0,6,24, $jargmineAasta);
//paneme kirja hetkel olev ajatempel
$hetkel = time();
//arvutame vahe nende kahe sündmuse vahel sekundites
$vahe = $jaaniPaev - $hetkel;
//päevas on 60 sekundit minutis * 60 minutit tunnis * 24 tundi -> nii palju sekundeid
$paevasSekunditeArv = 60 *60 *24;
// leiame mitu päeva on meie sekundites
$paevadeArv = (int)($vahe / $paevasSekunditeArv);
echo $jargmineAasta.' aasta jaanipäevani on jäänud '.$paevadeArv.' päeva!';

echo '<h3>Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.</h3>';
$minuSynnipaev = strtotime("26 January 1993");
$temaSynnipaev = strtotime("06 November 1980");
$synnipaevaVahe = $temaSynnipaev - $minuSynnipaev; // kui vahe on negatiivne - tema on vanem, kuna minu sünnipäev on hiljem
$vaheAastates = (int)($synnipaevaVahe / (60 * 60 * 24 * 30 * 12));

if($synnipaevaVahe < 0) {
    echo 'Tema on vanem kui mina ';
} else {
    echo 'Mina olen vanem kui tema ';
}
echo abs($vaheAastates).' aasta võrra<br>';

echo '<h3>Leia, kas sul on järgmine aasta juubel?</h3>';
$minuSynniKuuPaev = strtotime("26 January 1993");
$minuSynnikuupaevJargmiselAastal = strtotime("26 January ".$jargmineAasta); //$jargmineAasta on eelnevalt olemas
// mitu aastat vana olen?
$vanusSekundites = $minuSynnikuupaevJargmiselAastal - $minuSynniKuuPaev;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0) {
    echo $jargmineAasta.' sul on juubel';
} else {
    echo $jargmineAasta. ' sul pole juubelit';
}
echo '<h3>Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”</h3>';
date_default_timezone_set('Europe/Tallinn');
$kell = date('H');
if($kell >= 8 and $kell < 13) {
    echo 'Tere hommikust!';
} else if($kell >= 13 and $kell < 17) {
    echo 'Tere päevast!';
} else if($kell >= 17 or $kell > 0) {
    echo 'Tere õhtust';
}


