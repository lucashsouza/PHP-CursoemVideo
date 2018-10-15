<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Contador </title>
</head>
<body>
<div>
	<?php
		/*$c = 1;		1 até 10
		*while ($c<=10){
		*	echo "<center> $c <br/>";
		*	$c++;
		*
		*}
		*/

		$c = 10;	// 10 até 1
		while ($c>=1){
			echo "<center> $c <br/>";
			$c--;
		}

	?>
	
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4/>Voltar</a></font>
</div>
</body>
</html>