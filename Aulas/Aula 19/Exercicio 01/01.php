<!DOCTYPE html>
<html>
<head>
	<title>01 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo("<b>Exibindo um vetor:</b>\n");

			$v = array("A", "J", "M", "X", "K");
			
			echo "<br/>";

			// Lista apenas os elementos
			echo "<b>Utiliando print_r():</b>\n";
			print_r($v);

			echo "<br/>";

			// Listagem detalhada do array
			echo "<b>Utiliando var_dump():</b>\n";
			var_dump($v);

			// Contador de itens array
			echo "<b>\nArray possui ".count($v)." itens </b>";
		?>
	</pre>
</div>
</body>	
</html>
