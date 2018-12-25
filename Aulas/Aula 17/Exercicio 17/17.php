<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [17] ucwords </title>
</head>
<body>
<div>
	<?php
		// Deixa as primeiras letras maiusculas.
		
		echo "<h2><center>Teste da funcao UCWORDS</center></h2>";

		$nome = "Lucas Souza";
		$n = ucwords(strtolower($nome));

		echo "nome: $n";
	?>
</div>
</body>
</html>