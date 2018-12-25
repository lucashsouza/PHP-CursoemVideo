<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [15] strtoupper </title>
</head>
<body>
<div>
	<?php
		// Deixa o texto em letras maiusculas.
		
		echo "<h2><center>Teste da funcao STRTOUPPER</center></h2>";

		$nome = "Lucas Souza";
		$n = strtoupper($nome);

		echo "nome: $n";
	?>
</div>
</body>
</html>