<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<?php
		echo "<b>Contador 0 até 10: </b>";
		for ($i=1; $i <= 10; $i++) { 
			echo "$i ";
		}

		echo "<br/>";

		echo "<br/><b>Contador 10 até 0: </b>";
		for ($i=10; $i >= 1; $i--){
			echo "$i ";
		}

		echo "<br/>";

		echo "<br/><b>Contador de 5 até 50 (pulo:5): </b>";
		for ($i=5; $i <= 50 ; $i+=5) { 
			echo "$i ";
		}

		echo "<br/>";

		echo "<br/><b>Contador de 20 até 0 (pulo: -2): </b>";
		for ($i=20; $i >= 0 ; $i-=2) { 
			echo "$i ";
		}

	?>
</div>
</body>
</html>