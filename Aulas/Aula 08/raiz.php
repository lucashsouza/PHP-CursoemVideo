<html>
<head> <title> Raiz Quadrada </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		$valor = $_GET["v"];
		$raiz = sqrt($valor);

		echo "<font size=6 color=red><center><b> RAIZ QUADRADA </b></center></font><br/>";
		echo "<font size=5> O valor enviado foi: <b> $valor </b> <br/>";
		echo "Raiz quadrada: <b>".(number_format($raiz, 2))."</b></font><br/>"
	?>
	<a href="01.html"><br/><font color=blue size=5> Voltar </a></font>
</div>
</body>
</html>