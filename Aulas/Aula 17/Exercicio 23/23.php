<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [23] str_pad </title>
</head>
<body>
<div>
	<?php
		// Alinha a string de acordo com a necessidade.
		
		echo "<h2><center>Teste da funcao STRPAD</center></h2>";

		$nome = "@Lucashsouza";
		$novo = str_pad($nome, 30, "_");

		print("O programador $novo é muito inteligente.");
	?>
</div>
</body>
</html>