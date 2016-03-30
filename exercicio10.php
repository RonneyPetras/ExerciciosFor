<?php
$x=trim(fgets(STDIN));

for($i=1 ; $i <= 10 ; $i++) {
	$r=$i*$x;
	Print "$i X $x = $r\n";
}
