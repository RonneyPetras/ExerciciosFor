<?php
echo "Informe a qtd de vezes ";
$n = trim(fgets(STDIN));
$soma = 0;
for ($i=1; $i<=$n; $i++){
	$denominador = 2 * $i;
	$soma = 1/$denominador + $soma;
	echo ($i<$n) ? "1/$denominador + ":"1/$denominador = $soma";
}
