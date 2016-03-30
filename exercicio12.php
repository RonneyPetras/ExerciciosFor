<?php
echo "Indique a quantidade de ocorrencias ";
$n=trim(fgets(STDIN));
$soma=0; 
for($i=1; $i<=$n; $i++) {
	
	echo"Informe um numero real ";
	$x=trim(fgets(STDIN));
	$soma = $soma + $x;	
}

$media = $soma/$n;

echo"Soma é igual a $soma\n";
echo"Média é igual a $media";
