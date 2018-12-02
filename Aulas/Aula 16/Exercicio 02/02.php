<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [02] Print_r </title>
</head>
<body>
<div>
	<?php

	// print_r normalmente é utilizado em testes com array.

		echo "<h2><center>Teste da funcao PRINT_R</center></h2>";
			
		$v[0] = 4;
		$v[1] = 8;
		$v[2] = 3;

		print_r($v);
		echo "<br/>";

		$v2 = array(3, 7, 6, 2, 1, 9);
		print_r($v2);
	?>
</div>
</body>
</html>