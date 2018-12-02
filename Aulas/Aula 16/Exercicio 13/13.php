<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [13] ord </title>
</head>
<body>
<div>
	<?php
		// Localiza o codigo correspondente a letra do teclado.
		
		$letra = 'A';
		$cod = ord($letra);

		echo "<h2><center>Teste da funcao CHR</center></h2>";
		echo "Letra testada: $letra<br/>";

		echo "Cod da letra = $cod";
	?>
</div>
</body>
</html>