<html>
<head> <title> Referência </title> 
<link rel='stylesheet' href='_css/estilo.css'>

</head>
<body>
<div>
	<?php
	   	/* $a = 3; 
		 * $b = $a; 	
		 * $b += 5;
		 * A é diferente de B (sem referência)	 
		 */
		
		$a = 3;
		$b = &$a;
		$b += 5;
		// A é igual a B (por causa da referência)

		echo "A variavel A vale $a ";
		echo "<br/> A variavel B vale $b ";
	?>
</div>
</body>
</html>