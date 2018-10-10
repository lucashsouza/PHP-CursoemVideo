<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> Formulário - Estados </title>
</head>
<body>
<div>
	<?php
		$est = isset($_GET["op"])?$_GET["op"]:"opção não informada";

		switch ($est) {
			case '1':
				echo "Você mora na <b>região Sul</b>";
				break;
			
			case '2':
				echo "Você mora na </b>região Sudeste </b>";
				break;

			Case '3':
				echo "Você mora na <b>região Centro-Oeste</b>";
				break;

			Case '4':
				echo "Você mora na <b>região Nordeste</b>";
				break;

			Case '5':
				echo "Você mora na <b>região Norte</b>";
				break;
			
			default:
				echo "Estado inválido";
		}
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4/>Voltar</a></font>
</div>
</body>
</html>