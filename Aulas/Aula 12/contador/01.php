<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<?php
	$c = 10;
	do {
		echo $c . "<br/>";
		$c--;
	} while ($c >= 1);

	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>