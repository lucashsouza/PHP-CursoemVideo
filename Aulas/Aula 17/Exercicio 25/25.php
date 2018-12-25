<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [25] str_replace </title>
</head>
<body>
<div>
	<?php
		// Reposiciona string.
		
		echo "<h2><center>Teste da funcao STR_REPLACE</center></h2>";

		$txt = "PHP é uma ótima linguagem de programação.";

		echo "Frase: $txt <br/>";

		$rep = str_ireplace("PHP", "Python", $txt);

		echo "Replace: $rep";
	?>
</div>
</body>
</html>