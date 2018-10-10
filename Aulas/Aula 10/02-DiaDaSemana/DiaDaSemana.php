<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Dia da semana </title>
</head>
<body>
<div>
	<?php
	// recebendo valor da url vindo do html
	$d = isset($_GET["ds"])?$_GET["ds"]:0;

	// Dia de semana:
	switch ($d) {
		case "2":
		case "3":
		case "4":
		case "5":
		case "6":
			echo "<b>Levante e vá estudar! Tu é o futuro da nação. :)</b>";	
			break;

	// Fim de semana:
		case "7":
		case "8":
			echo "<b>Pode descansar tranquilo!</b>";
			break;
		
	// Valores inválidos:
		default:
			echo "<b>Erro! Dia da semana inválido!</b>";
	}
	
	?>
	<!-- Botao "voltar" -->
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4/>Voltar</a></font>


</div>
</body>
</html>