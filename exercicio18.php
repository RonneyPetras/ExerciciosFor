<?php
echo "Informe a qtd de vezes ";

$n = trim(fgets(STDIN));

$fatorial = 1;

for ($i=1; $i<=$n; $i++) {
	$fatorial = $fatorial * $i;
	
	if ($i==1) {
		echo "$n! = $i x ";
	}
	
	else if($i<$n) {
		echo "$i x ";
	}
		
	else {
		echo "$i = $fatorial";
	}
		
}
