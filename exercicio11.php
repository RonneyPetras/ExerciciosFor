<?php
echo"Qual numero será multiplicado? ";
$x=trim(fgets(STDIN));
echo"Será multiplicado até qual numero? ";
$y=trim(fgets(STDIN));

for($i=1 ; $i <= $y ; $i++) {
	$r=$i*$x;
	Print "$i X $x = $r\n";
}
