<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [10] str_split </title>
</head>
<body>
<div>
	<?php
		// str_split Separa em array cada string.

		echo "<h2><center>Teste da funcao STR_SPLIT</center></h2>";

		$nome = "Lucas";
		$n = str_split($nome);

		echo "$nome <br/>";
		print_r($n);
	?>
</div>
</body>
</html>