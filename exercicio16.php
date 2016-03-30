<?php
echo "Infome a qtd de vezes ";
$n = trim(fgets(STDIN));
$soma = 0;
for ($i=1; $i<=$n; $i++) {
	$soma = $soma + pow(3,$i);
	echo ($i< $n) ? "3^$i + " : "3^$i = $soma";
}