<?php
echo"Digite a quantidade de ocorrencias ";
$n = trim(fgets(STDIN));
$soma =0;
$qtd=0;

for($i=1; $i<= $n; $i++){
	echo"Informe um numero par: ";
	$x =trim(fgets(STDIN));
	if ($x%2==0){
		$soma=$x+$soma;
		$qtd++;
	}
}
if($qtd==0){
	echo "Nenhum numero par foi informado.";
}
else{
	$media=$soma/$qtd;
	echo"Soma é igual a $soma\nMédia é igual a $media";
}