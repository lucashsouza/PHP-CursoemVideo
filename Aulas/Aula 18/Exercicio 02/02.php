<!DOCTYPE html>
<html>
<head>
	<title>02 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre> 
		<?php

			echo("<b>Foi utiliado o print_r, gerado com os seguintes parâmetros:\n\n</b>");

 			echo ("	
 				* Array por range (X, Y, Z)

				* X = Início;
				* Y = Fim;
				* Z = Passo\n");

			echo("<b>Foi utilizado:</b>\n\nc = range(5, 21, 2)\nprint_r(c)\n\n");
			
			$c = range(5, 21, 2);

			print_r($c);
		?>
	</pre>
</div>
</body>	
</html>
