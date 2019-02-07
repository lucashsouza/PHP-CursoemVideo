<!DOCTYPE html>
<html>
<head>
	<title>09 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Ordenando por chaves 'krsort'\n</b>";
			
			$v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");

			print_r($v);

			// Ordena por chaves (decrescente)
			krsort($v);

			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>
