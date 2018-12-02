<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [09] explode </title>
</head>
<body>
<div>
	<?php
		// explode elimina algo desejado.

		echo "<h2><center>Teste da funcao EXPLODE</center></h2>";

		$txt = "PHP é uma ótima linguagem de programação.";
		$array = explode(" ", $txt);

		echo $txt."<br/>";
		print_r($array);
	?>
</div>
</body>
</html>