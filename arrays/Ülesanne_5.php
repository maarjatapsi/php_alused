<?php
//algab õppeained
echo "<h1>Õppeained</h1>";
$ained = array('Programmeerimine', 'Matemaatika', 'IT-süsteemide riistvara', 'Veebidisain', 'Andmebaasi alused');
//sorteerimine
sort($ained);
foreach ($ained as $aine) {
    echo $aine. "<br>";
}
echo "<hr>";
//algab pallivise
echo "<h1>Pallivise</h1>";
$nimed = array('Martin', 'Hardi', 'Juhan', 'Tiina', 'Sirje', 'Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
//osalejaid kokku
$o_kokku = count($nimed);
//tulemus kokku
$p_kokku = array_sum($pallivisked);
//keskmine tulemus
$p_keskmine = round($p_kokku / $o_kokku);
//parim  tulemus
$max = max($pallivisked);
echo "Osalejate arv: " .$o_kokku;
echo "<br>";
echo "Keskmine palliviske tulemus: " .$p_keskmine;
echo "<br>";
echo "Parim tulemus: " .$max;
echo "<br>";
// otsime arrayed, mis käivad kokku
echo "Parima tulemuse visanud õpilase nimi: " .$nimed[array_search($max, $pallivisked)];
echo "<br>";

echo "<hr>";
//algab raamatud
echo "<h1>Raamatud</h1>";