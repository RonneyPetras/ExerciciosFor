<?php
echo"informe qual é a base: ";
$a = trim(fgets(STDIN));

echo"Informe o expoente: ";
$b = trim(fgets(STDIN));
$soma=0;
for ($i=0; $i<=$b; $i++) {

	$soma = $soma + $a;
	echo ($i<$b) ? "$a x ": "$a = $soma";
}