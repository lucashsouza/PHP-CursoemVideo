<html>
<head> <title> Comparação </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		$a = 3;
		$b = "3";

		// Verdadeiro:Falso;

		$r1 = $a == $b?"Sim":"Não";  // igual;
		$r2 = $a === $b?"Sim":'Não'; // idêntico;

		echo "Var A= $a <br/> Var B= $b <br/>";
		echo "<br/> As variáveis A e B sao iguais? <b>$r1</b><br/>";
		echo "Do mesmo tipo? <b>$r2</b>";
	?>
</div>
</body>
</html>