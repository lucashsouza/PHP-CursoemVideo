<!DOCTYPE html>
<html>
<head>
	<title>05 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Organizando array em ordem reversa\n</b>";
			
			$v = array("A", "J", "M", "X", "K");

			print_r($v);

			// Organiza em ordem reversa numerica/alfabetica
			rsort($v);

			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>