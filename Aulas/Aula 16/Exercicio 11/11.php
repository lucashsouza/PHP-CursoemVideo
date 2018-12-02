<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [11] implode </title>
</head>
<body>
<div>
	<?php
		// implode adiciona algo desejado.

		echo "<h2><center>Teste da funcao IMPLODE</center></h2>";

		$vetor[0] = "PHP";
		$vetor[1] = "é";
		$vetor[2] = "uma";
		$vetor[3] = "ótima";
		$vetor[4] = "linguagem";
		$vetor[5] = "de";
		$vetor[6] = "Programação";

		$txt = implode(" ", $vetor);
		print($txt);
	?>
</div>
</body>
</html>