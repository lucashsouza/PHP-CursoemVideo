<html>
<head> <title> Variável da variável </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		$x = "abc";
		$$x = "def"; // É criado a variavel ABC 

		echo "<center><font size = 18><b> Variável da Variável! </b></font><br/></center>";
		echo "<br> Variavel X: <b>$x</b>";
		echo "<br/> Variavel da variavel X: <b>$abc</b>";
	?>
</div>
</body>
</html>