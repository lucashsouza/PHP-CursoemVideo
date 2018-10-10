<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<?php
	$n = isset($_GET["num"])?$_GET["num"]:0;
	$op = isset($_GET["oper"])?$_GET["oper"]:1;

	switch ($op) {
		case '1':
			$r = $n * 2;
			break;

		case '2':
			$r = pow($n,3);
			break;
		
		case '3':
			$r = sqrt($n);
			break;	
	}
	
	echo " O resultado da operação solicitada: <span class='foco'> $r </span>";
	
	?>
	<a href="exercicio01.html"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>