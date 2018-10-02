<html>
<head> <title> Ano atual </title> 
<link rel='stylesheet' href='_css/estilo.css'>
</head>
<body>
<div>
	<?php
		$atual = $_GET["aa"]; // Recebe da url o valor do ano atual
		echo "O ano atual é $atual <br>";
		echo "<br> Ano aterior é ". --$atual;
	?>
</div>
</body>
</html>