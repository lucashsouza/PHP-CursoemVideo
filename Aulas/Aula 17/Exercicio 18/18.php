<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [18] strrev </title>
</head>
<body>
<div>
	<?php
		// Mostra o contrario de uma string.
		
		echo "<h2><center>Teste da funcao STRREV</center></h2>";

		$nome = "Lucas Souza";
		$n = strrev(strtolower($nome));

		echo "nome: $n";
	?>
</div>
</body>
</html>