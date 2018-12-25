<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [19] strpos </title>
</head>
<body>
<div>
	<?php
		// Procurar string.
		
		echo "<h2><center>Teste da funcao STRPOS</center></h2>";

		$txt = "PHP é uma ótima linguagem de programação.";
		$pos = strpos($txt, "PHP");

		echo "Frase: $txt <br/>";
		echo "Posicao da string 'PHP': $pos";
	?>
</div>
</body>
</html>