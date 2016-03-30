<?php
echo "Informe a qtd de vezes ";
$n = trim(fgets(STDIN));
echo "Informe o valor de X ";
$x = trim(fgets(STDIN));
$soma = 0;
for ($i=1; $i<=$n; $i++) {
	$p = 2*$i;
	$soma = $soma + pow($x,$p);
	echo ($i<$n) ? "$x^$p + " : "$x^$p = $soma";
}
	