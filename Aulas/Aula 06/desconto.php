<html>
<head> <title> Desconto </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		$preco = $_GET["p"];
		echo "O preço é R$ ". (number_format($preco, 2));
		$preco -= $preco * 10 / 100;
		echo "<br> Com 10 % de desconto: R$ ". (number_format($preco, 2));
	?>
</div>
</body>
</html>