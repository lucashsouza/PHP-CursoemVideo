<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<fieldset><legend>Contador solicitado</legend>
	<?php
		$ini = $_GET["inicio"];
		$fin = $_GET["final"];
		$inc = $_GET["incremento"];

		if ($ini < $fin){
			while ($ini <= $fin){
				echo $ini."<br/>";
				$ini += $inc;
			}
		}
		elseif ($ini > $fin) {
			while ($fin <= $ini){
				echo $ini."<br/>";
				$ini -= $inc;
			}
		}
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font>
	</fieldset>
</div>
</body>
</html>