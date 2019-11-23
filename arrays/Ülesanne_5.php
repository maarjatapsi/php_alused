<?php
//algab õppeained
echo "<h1>Õppeained</h1>";
$ained = array('Programmeerimine', 'Matemaatika', 'IT-süsteemide riistvara', 'Veebidisain', 'Andmebaasi alused');
//sorteerimine
sort($ained);
$arrlength = count($ained);
for($x = 0; $x < $arrlength; $x++) {
    echo $ained[$x];
    echo "<br>";
}
echo "<hr>";
//algab pallivise
echo "<h1>Pallivise</h1>";
$nimed = array('Martin', 'Hardi', 'Juhan', 'Tiina', 'Sirje', 'Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
echo "Osalejate arv: " .count($nimed);
echo "<br>";

echo "<hr>";
//algab raamatud
echo "<h1>Raamatud</h1>";