<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Tabuadas </title>
</head>
<body>
<div>
	<center>
	<?php

	$v = isset($_GET["valor"])?$_GET["valor"]:"Erro! valor inválido";
	$c = 1;

	echo "<fieldset><legend><b>Tabuada do $v</b></legend>";

	do{
		$r = $v * $c;
		echo "$v x $c = $r <br/>";
		$c ++;
	} while($c <= 10);
	echo "</fieldset>";
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font></center>
</div>
</body>
</html>