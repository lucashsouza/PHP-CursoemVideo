<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [22] substr </title>
</head>
<body>
<div>
	<?php
		// Fatia a string de acordo com a necessidade.
		
		echo "<h2><center>Teste da funcao SUBSTR</center></h2>";

		$txt = "PHP é uma ótima linguagem de programação.";
		$fatiado = substr($txt, 0, 3);

		// substr($txt, -14) ultima palavra.
		// substr($txt, -14, 3) ultima palavra e as 3 primeiras letras.
		// substr($txt, 7) a partir do 7 caractere.

		echo "Frase: $txt <br/>";
		echo "Fatiado: $fatiado";
	?>
</div>
</body>
</html>