<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title>[01] Printf </title>
</head>
<body>
<div>
	<?php
			echo "<h2><center>Teste da funcao PRINTF</center></h2>";

		$produto = "Leite";
		$preco = "4.5";

		//echo "o $p custa R$".number_format($pr, 2);

		printf("O %s custa %.2f", $produto, $preco);

	?>
</div>
</body>
</html>