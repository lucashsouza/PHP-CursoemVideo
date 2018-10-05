<!DOCTYPE html>
<head>
	<link rel='stylesheet' href='_css/estilo.css'>
	<meta charset="UTF-8"/>
	<title>Cores</title> 
	<?php
	$txt = isset($_GET["t"])?$_GET["t"]:"Texto genérico";
	$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
	$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
	?>
	<style>
		span.texto {
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style> 
</head>
<body> 
<div>
	<?php
	echo "<span class='texto'>$txt </span>";
	?>
	<a href="cor.html"><br/><font color=blue size=5> Voltar </a></font>
</div>
</body>
</html>