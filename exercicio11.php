<?php
echo"Qual numero ser� multiplicado? ";
$x=trim(fgets(STDIN));
echo"Ser� multiplicado at� qual numero? ";
$y=trim(fgets(STDIN));

for($i=1 ; $i <= $y ; $i++) {
	$r=$i*$x;
	Print "$i X $x = $r\n";
}
