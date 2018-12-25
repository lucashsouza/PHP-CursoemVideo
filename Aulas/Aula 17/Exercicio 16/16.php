<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [16] ucfirst </title>
</head>
<body>
<div>
	<?php
		// Deixa a primeira letra maiuscula.
		
		echo "<h2><center>Teste da funcao UCFIRST</center></h2>";

		$nome = "Lucas Souza";
		$n = ucfirst(strtolower($nome));

		echo "nome: $n";
	?>
</div>
</body>
</html>