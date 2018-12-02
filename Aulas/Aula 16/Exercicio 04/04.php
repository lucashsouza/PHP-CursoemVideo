<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [04] strlen </title>
</head>
<body>
<div>
	<?php
		// strlen Tem a funcao dec ontar uma str (incluindo espaços).

		echo "<h2><center>Teste da funcao STRLEN</center></h2>";

		$txt = 'PHP é uma otima linguagem de Programação';
		$tam = strlen($txt);

		echo "$txt <br/>";
		echo "Tamanho da string: $tam";
	?>
</div>
</body>
</html>