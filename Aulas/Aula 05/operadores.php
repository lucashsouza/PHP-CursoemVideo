<html>
<head> <title> Operadores </title>
<link rel='stylesheet' href='_css/estilo.css'> 
</head>
<body>
	<div>
		<?php
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$m = ($n1 + $n2) / 2;
			
			echo "Número 1 = $n1 <br>";
			echo "Número 2 = $n2 <br><br>";

			echo "<b> Operadores: </b><br>";

			echo "<br> A soma entre $n1 e $n2 é ". ($n1 + $n2);
			echo "<br> A subtração entre $n1 e $n2 é ". ($n1 - $n2);
			echo "<br> A multiplicação entre $n1 e $n2 é ". ($n1 * $n2);
			echo "<br> A divisão entre $n1 e $n2 é ". ($n1 / $n2);
			echo "<br> O modulo entre $n1 e $n2 é ". ($n1 % $n2). "<br>";
			echo "<br><b> A média é: $m</b>";
		?>
	</div>
</body>
</html>