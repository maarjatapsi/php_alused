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