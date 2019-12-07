<?php
//faili nimi
$allikas = 'lipsum.txt';
//ava fail
$minu_fail = fopen($allikas, 'w');
//teksti kirjutamine
$tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae sem nisl.
Donec lacinia convallis tempor. Nullam et libero vel leo maximus pulvinar. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
Nullam dolor dui, imperdiet et suscipit a, imperdiet a massa. Maecenas vitae purus condimentum, tincidunt massa non, mattis sem.
Donec molestie ante tellus. Integer in sapien est.
Quisque varius sem ut quam gravida, sed imperdiet neque pharetra.
Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam erat volutpat.
Vivamus pulvinar dolor leo, vitae rhoncus enim dignissim et. Sed rhoncus velit consectetur metus molestie, in interdum augue tincidunt.
Aliquam blandit a lacus a venenatis. Nulla nec dolor ut velit malesuada condimentum. ";
file_put_contents($allikas, $tekst);
$tekstFailist = file_get_contents($allikas);
echo $tekstFailist;
rename($allikas, 'lipsum2.txt');
fclose($minu_fail);