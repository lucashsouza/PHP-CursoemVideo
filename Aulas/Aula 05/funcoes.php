<html>
<head> <title> Funções </title>
<link rel='stylesheet' href='_css/estilo.css'> 
</head>
<body>
	<div>
		<?php
			$v1 = 3;
			$v2 = 4;

			echo "<h2> Valores recebidos: $v1 e $v2 </h2><br>";
			echo "O valor absoluto de $v1 é ". abs($v1);
			echo "<br> O valor absoluto de $v2 é ". abs($v2);
			echo "<br> O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);	
			echo "<br> A raiz quadrada de $v1 é ". sqrt($v1);
			echo "<br> O valor de $v1 arredondado é ". round($v1); 
			echo "<br> O valor de $v2 arredondado é ". round($v2); // ceil = cima, floor = baixo
			echo "<br> O valor real de $v1 é ". intval($v1);
			echo "<br> O valor real de $v2 é ". intval($v2);
			echo "<br> O valor de $v1 em Moeda é R$". number_format($v1, 2);
			echo "<br> O valor de $v2 em Moeda é R$". number_format($v2, 2, ",", ".");
		?>
	</div>
</body>
</html>