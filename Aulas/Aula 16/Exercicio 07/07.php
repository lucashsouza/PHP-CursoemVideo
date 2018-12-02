<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [07] Rtrim </title>
</head>
<body>
<div>
	<?php
		// rtrim ignora os espaços no final.
		
		echo "<h2><center>Teste da funcao RTRIM</center></h2>";
		
		$nome = '   Lucas Souza   ';
		$n = rtrim($nome); 


		echo "Nome: $n <br/>";
		echo "Qtd de caracteres: ".strlen($nome)."<br/>";
		echo "Qtd de caracteres com RTRIM:".strlen($n);
		?>
</div>
</body>
</html>