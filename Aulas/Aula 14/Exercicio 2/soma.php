<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<?php
		function soma ($a, $b) {
			return $a+$b; 
		}

		$x = 2;
		$y = 5;
		$r = soma ($x, $y);

		echo "$x + $y = $r";
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>