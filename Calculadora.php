<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
		<meta charset="utf-8">
	</head>

	<body>
		<h1>Projeto - Calculadora</h1>
		<form method="post" action="calc.php">
			Valor 1: <input type="text" name="textv1"><br>
			Valor 2: <input type="number" name="textv2"><br>
			<br>
			<select name="operacao">
				<option>Soma</option>
				<option>Subtração</option>
				<option>Multiplicação</option>
				<option>Divisão</option>
			</select>
			<br> <input type="submit" value="Calcular">
		</form>

	</body>
</html>