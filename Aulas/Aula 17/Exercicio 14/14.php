<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [14] strtolower </title>
</head>
<body>
<div>
	<?php
		// Deixa o texto em letras minusculas.
		
		echo "<h2><center>Teste da função STRTOLOWER</center></h2>";
		
		$nome = "Lucas Souza";
		$n = strtolower($nome);

		echo "nome: $n";
	?>
</div>
</body>
</html>