<?php

$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
$vanused = array(15, 23, 32, 28, 18);

//massiivi sisu koos parameetritega
var_dump($nimed);
echo "<br><br>";
//massiivi sisu kuvamine
print_r($nimed);
echo "<br><br>";
echo $nimed[0];
echo "<br><br>";

//massiivi kõigi elementide väljastamine
foreach($nimed as $nimi){
    echo "$nimi <br>";
}
echo "<br><br>";
$hinded = array(
    'kehv' => 2,
    'rahuldav' => 3,
    'hea' => 4,
    'väga hea' => 5
);
echo $hinded['kehv']; //tulemus 2
echo "<br><br>";
foreach($hinded as $hinnang => $hinne) {
    echo "<li>Hinne: $hinne ($hinnang)</li>";
}

echo "<br><br>";
//lisamine massiivi
array_push($nimed, 'ahmed', 'ahti');
var_dump($nimed);

echo "<br><br>";
$nimed[] = 'ahmed';
var_dump($nimed);

echo "<br><br>";
$nimed[13] = 'bob';
var_dump($nimed);
echo "<br><br>";
//lisab lgusesse
array_unshift($nimed, 'laura');
var_dump($nimed);
//massiivist viimase väärtuse eemaldamine
array_pop($nimed);
//esimese väärtuse eemaldamine
array_shift($nimed);
$nimi = array_pop($nimed);
echo "Eemaldati: ".$nimi;
echo "<br><br>";
//mitu väärtust massiivist hoitakse
echo count($nimed);
echo "<br><br>";
// sorteerimine
sort($nimed);
var_dump($nimed);
echo "<br><br>";
//assotatiivne massiiv, sorteeritakse võtme järgi
ksort($hinded);
var_dump($hinded);
echo "<br><br>";
//assotatiivne massiiv, sorteeritakse väärtuse järgi
asort($hinded);
var_dump($hinded);
echo "<br><br>";
//tulemuse sassi ajamiseks
shuffle($nimed);
var_dump($nimed);