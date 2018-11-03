<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Função Soma</title>
</head>
<body>
<div>
	<?php
		echo "<center><p><b>Função - Soma </b></p>";

		function soma($a, $b){
			$s = $a + $b;
			echo "$a + $b = <b>$s</b><br/>";
		} 

		soma(1, 1);
		soma(2, 2);
		soma(10, 10);

	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font></center>
</div>
</body>
</html>