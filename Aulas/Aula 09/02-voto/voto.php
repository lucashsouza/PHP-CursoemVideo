<!DOCTYPE html>
<head>
	<link rel='stylesheet' href='_css/estilo.css'>
	<meta charset="UTF-8"/>
	<title>Votação - Obrigtório/opcional</title>  
</head>
<body> 
<div>
	<?php
		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;

		echo "Você tem $i anos.";

		if ($i < 16){
			$tipovoto = "Não permitido";
		}
		elseif (($i >= 16 && $i <18)||($i>65)){
				$tipovoto = "Opcional.";
		}
		else{
			$tipovoto = "Obrigatório";
		}

		echo "<br/>Portanto, seu voto é: $tipovoto";
	?>
	<a href="voto.html"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>