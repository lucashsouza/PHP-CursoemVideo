<!DOCTYPE html>
<html>
<head>
	<title>04 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre> 	
		<?php
			echo "<b>Manipulação de Arrays:\n</b>";
			echo "<b>\nLista de arrays:\n\n</b>";
			echo "N[0] = A\nN[3] = B\nN[5] = C\nN[7] = D\nN[10] = E\n\n";
			
			$n = Array(	0=>'A',
						3=>'B',
						5=>'C',
						7=>'D',
						10=>'E');
			
			// Add array
			echo "<b>Adicionando itens:</b>\n";
			echo "- n[x] = 'F'\n";
			$n[] = 'F';

			// Remover array
			echo "<b>\nRemovendo itens: </b>\n";
			echo "- unset(n[x])\n";
			unset($n[11]);

			// Mostrar array
			echo "<b>\nMostrar array:</b>\n";
			echo "- print_r(n)\n";
			echo "<br/>";

			print_r($n);

		?>
	</pre>
</div>
</body>	
</html>
