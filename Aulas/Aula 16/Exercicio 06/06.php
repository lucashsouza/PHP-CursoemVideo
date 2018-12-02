<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [06] Ltrim </title>
</head>
<body>
<div>
	<?php
		// ltrim ignora os espaços no começo

		echo "<h2><center>Teste da funcao LTRIM</center></h2>";
		$nome = '   Lucas Souza   ';
		$n = ltrim($nome); 


		echo "Nome: $n <br/>";
		echo "Qtd de caracteres: ".strlen($nome)."<br/>";
		echo "Qtd de caracteres com LTRIM:".strlen($n);
	?>
</div>
</body>
</html>