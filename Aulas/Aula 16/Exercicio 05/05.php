<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [05] trim </title>
</head>
<body>
<div>
	<?php

	// trim ignora os espaços no começo e no fim.

		echo "<h2><center>Teste da funcao TRIM</center></h2>";

		$nome = '   Lucas Souza   ';
		$n = trim($nome); 


		echo "Nome: $n <br/>";
		echo "Qtd de caracteres: ".strlen($nome)."<br/>";
		echo "Qtd de caracteres com TRIM:".strlen($n);
	?>
</div>
</body>
</html>