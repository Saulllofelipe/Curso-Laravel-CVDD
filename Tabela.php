<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2">
			<thead>
				<tr>
					<th>Mes</th>th>
					<th>Trimestre</th>th>
					<th>Desconto (%)</th>th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach (range(1,12) as $mes) {
						echo '<tr>';
						echo '<td>'.$mes.'</td>';
						echo '<td>'.ceil($mes/3).'</td>';
						echo '<td>'.((ceil($mes/3))*($mes*2-ceil($mes/3))).'</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
</body>
</html>
	
