<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [20] stripos </title>
</head>
<body>
<div>
	<?php
		// Procurar string maiuscula ou minuscula.
		
		echo "<h2><center>Teste da funcao STRIPOS</center></h2>";

		$txt = "PHP é uma ótima linguagem de programação.";
		$pos = stripos($txt, "php");

		echo "Frase: $txt <br/>";
		echo "Posicao da string 'PHP': $pos";
	?>
</div>
</body>
</html>