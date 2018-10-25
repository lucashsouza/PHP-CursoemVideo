<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<center>
	
	<?php
		$n = isset($_GET['num'])?$_GET['num']:0; // Recebe em uma var o num desejado

		echo "<h1> Tabuada do $n</h1>"; 

		for ($i=0; $i <=10 ; $i++) {			// Entre 0 e 10
			$r = $n * $i; 						// Processamento da conta
			echo "$n x $i = $r <br/> ";			// Exibe os resultados
		}
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font></center>
</div>
</body>
</html>