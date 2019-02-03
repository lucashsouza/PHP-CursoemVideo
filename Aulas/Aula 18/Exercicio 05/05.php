<!DOCTYPE html>
<html>
<head>
	<title>05 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<table border="2"><tr>
			<?php

				// k = key, v = value.
				echo "<b>Exemplo de Array:\n</b>";

				$v = Array(	'Nome' => 'Ana',
							'Idade' => '23',
							'Peso' => '65.5',
							'Fuma' => True);

				foreach ($v as $k => $c) {
					echo "<td>$k = $c</td>";

				}

				// Mostrar array
				echo "<br/><br/>";
				print_r($v);

			?>
		</table>
	</pre>
</div>
</body>	
</html>
