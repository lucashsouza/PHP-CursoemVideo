<!DOCTYPE html>
<html>
<head>
	<title>06 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Assossiando array 'asort'\n</b>";
			
			$v = array("A", "J", "M", "X", "K");

			print_r($v);

			// Organiza em ordem assossiativa
			asort($v);

			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>