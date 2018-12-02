<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<?php
		function teste (&$x) {
			$x += 2;
			echo "valor de X: $x <br/>";
		}

		$a = 3;
		teste($a);
		echo "Valor de A: $a";	

	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>