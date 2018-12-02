<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [12] char </title>
</head>
<body>
<div>
	<?php
		// Localiza a letra correspondente ao código do teclado.
		
		$cod = 65;
		$letra = chr(65);

		echo "<h2><center>Teste da funcao CHR</center></h2>";
		echo "Cod testado: $cod <br/>";
		

		echo "cod $cod = $letra";
	?>
</div>
</body>
</html>