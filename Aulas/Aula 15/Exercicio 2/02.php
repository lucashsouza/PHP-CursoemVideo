<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Importando funcoes </title>
</head>
<body>
<div>
<center>
	<?php
		include "funcoes.php";						// importa 'funcoes.php'
		echo "<h1>Testando funções <br/></h1>";

		hello ();									// funcao hello
		valor (4);									// funcao valor (4 de parametro)

	?>
</center>
</div>
</body>
</html>