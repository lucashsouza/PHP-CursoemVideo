<html>
<head> <title> Votos </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		$ano = $_GET["an"]; // ano de nascimento
		$idade = 2018 - $ano;
		echo "<center><font 24px><b> ELEIÇÕES </b></center></font><br>";
		echo "Quem nasceu em $ano, tem idade igual a $idade.";

		$tipo = ($idade >= 18 && $idade <= 65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";

		echo "<br/> Voto: $tipo";
	?>
</div>
</body>
</html>