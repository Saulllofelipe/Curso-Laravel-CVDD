<?php
include ("./Calculadora.php");
if ($_POST) {
	$v1 = $_POST['textv1'];
	$v2 = $_POST['textv2'];
	$op = $_POST['operacao'];

	if ($op == 'Soma') {
		$total = $v1 + $v2;
		echo $total;
	} 

	else if ($op == 'Subtração') {
		$total = $v1 - $v2;
		echo $total;
	}
	else if ($op == 'Multiplicação') {
		$total = $v1 * $v2;
		echo $total;
	}
	else if ($op == 'Divisão') {
		$total = $v1 / $v2;
		echo $total;
	}

	}
?>
