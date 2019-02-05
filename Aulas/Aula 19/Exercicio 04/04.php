<!DOCTYPE html>
<html>
<head>
	<title>04 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Organizando array em ordem\n</b>";
			
			$v = array("A", "J", "M", "X", "K");

			print_r($v);

			// Organiza em ordem numerica/alfabetica
			sort($v);

			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>