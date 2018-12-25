<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [21] substr_count </title>
</head>
<body>
<div>
	<?php
		// Conta as strings dentro de uma frase.
		
		echo "<h2><center>Teste da funcao STRPOS</center></h2>";

		$txt = "PHP é uma ótima linguagem de programação. PHP";
		$cont = substr_count($txt, 'PHP');

		echo "Frase: $txt <br/>";
		echo "'PHP' encontrados: $cont";
	?>
</div>
</body>
</html>