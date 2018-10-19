<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Fatorial </title>
</head>
<body>
<div>

	<?php
	$v = isset($_GET['val'])?$_GET['val']:'ERRO! informe um valor válido.';
	$c = $v;
	$fat = 1;
	
	do {
		$fat = $fat * $c; 
		$c--;
	} while ($c >= 1);

	echo "<fieldset><legend>Calculando a fatorial de $v</legend>";
	echo "$v! = $fat". "</fieldset>";
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>