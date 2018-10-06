<!DOCTYPE html>
<head>
	<link rel='stylesheet' href='_css/estilo.css'>
	<meta charset="UTF-8"/>
	<title>VOTO - 18 Anos</title>  
</head>
<body> 
<div>
	<?php
		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;

		echo "Você tem $i anos.";

		if ($i >= 18){
			echo "<br/>E pode votar e dirigir.";
		}
		else{
			echo "<br/>E não pode votar e dirigir.";
		}
	?>
	<a href="voto.html"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>