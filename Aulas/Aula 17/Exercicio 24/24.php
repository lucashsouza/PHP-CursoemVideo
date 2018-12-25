<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [24] str_repeat </title>
</head>
<body>
<div>
	<?php
		// Repete a string, conforme o desejado.

		echo "<h2><center>Teste da funcao STRPOS</center></h2>";

		$txt = str_repeat("PHP", 5);

		print(str_repeat("-", 50));
		print("<br/>Texto gerado: $txt <br/>");
		print(str_repeat("-", 50));	
	?>
</div>
</body>
</html>