<html>
<head> <title> Operador </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		// Pega o vaor da url

		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];

		echo "Os valores passados foram $n1 e $n2 <br/>";

		// verdadeiro = soma; falso = multiplicação;

		$r = ($tipo == "s")?$n1+$n2:$n1*$n2;

		echo "O resultado será $r";
	?>
</div>
</body>
</html>