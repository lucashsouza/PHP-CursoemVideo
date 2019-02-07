<!DOCTYPE html>
<html>
<head>
	<title>08 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Ordenando por chaves 'ksort'\n</b>";
			
			$v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");

			print_r($v);

			// Ordena por chaves (crescente)
			ksort($v);

			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>