<!DOCTYPE html>
<head>
	<link rel='stylesheet' href='_css/estilo.css'>
	<meta charset="UTF-8"/>
	<title> Formulário</title> 
</head>
<body>
<div>
	<?php
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";

		$idade = date("Y") - $ano;

		echo "<b>Nome</b>: $nome <br/>";
		echo "<b>Idade</b>: $idade <br/>";
		echo "<b>Sexo</b>: $sexo <br/>";
	?>
	<a href="formulario.html"><br/><font color=blue size=5> Voltar </a></font>
</div>
</body>
</html>