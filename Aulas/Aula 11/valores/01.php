<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<form method="get" action="02.php">

	<!-- Programa em PHP que envia valores a outro PHP que exibe na tela. -->

	<?php
	
	$c = 1;
	while ($c <= 5) {
		echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
		$c++;
	}

	?>
	<br/>
	<input type="submit" value="Enviar"/>
</div>
</body>
</html>