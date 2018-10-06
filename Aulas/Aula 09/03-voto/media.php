<!DOCTYPE html>
<head>
	<link rel='stylesheet' href='_css/estilo.css'>
	<meta charset="UTF-8"/>
	<title>Média</title>
	<?php
	$n1 = isset($_GET["n1"])?$_GET["n1"]:0;	
	$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
	$m = ($n1 + $n2) / 2;
	?> 
	<style>
		b{
		color: red	
		}
	</style>
</head>
<body> 
<div>
	<?php
	if ($m < 5){
		$sit = "REPROVADO";
	}
	elseif ($m >= 5 & $m < 7){
		$sit = "RECUPERAÇÃO";
	}
	elseif ($m >= 7 & $m < 9) {
		$sit = "BOM";
	} 
	else {
		$sit = "EXCELENTE!";
	}	

	echo "A média entre <b color='red'>$n1 e $n2</b> é igual <b color='red'>$m</b>" . "<br/>" . "Situação do aluno é: <b color='red'>$sit</b>";

	?>
	<a href="media.html"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>