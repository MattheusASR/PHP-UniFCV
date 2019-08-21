<?php
// ex2

$salarioT = 0;
$salarioFinal = 0;
$salarioFixo1 = 100.00;
$salarioFixo2 = 10000.00;
$salario1 = 1000.00;
$salario2 = 1000.01;
$r5 = 0.05;
$r8 = 0.08; 

echo 'Reajuste 5% <br/>';

if ($salarioFixo1 <= $salario1) {
	$salarioT = $salarioFixo1 * $r5;
	$salarioFinal = $salarioT + $salarioFixo1;
	echo 'Valor reajustado é: ', $salarioFinal;
	echo '<br/> <br/>';
}	


echo 'Reajuste 8% <br/>';

if ($salarioFixo2 >= $salario2) {
	$salarioT = $salarioFixo2 * $r8;
	$salarioFinal = $salarioT + $salarioFixo2;
	echo 'Valor reajustado é: ', $salarioFinal;
}	