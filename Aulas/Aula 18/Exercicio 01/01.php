<!DOCTYPE html>
<html>
<head>
	<title>01 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre> 
		<?php
			echo("<b>Foi utiliado o print_r(var N) para Visualizar melhor o array\n\n</b>");

			echo("<b>Lista dos dados gravados na array:</b>\n\n");
			echo("N[0] = 3<br/>N[1] = 5<br/>");
			echo("N[2] = 8<br/>N[3] = 2<br/>\n");

			$n = array(3, 5, 8, 2);
			$n[] = 7;

			print_r($n);
		?>
	</pre>
</div>
</body>	
</html>
