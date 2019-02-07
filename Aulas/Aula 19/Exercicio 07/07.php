<!DOCTYPE html>
<html>
<head>
	<title>07 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Assossiando array 'arsort' em ordem reversa\n</b>";
			
			$v = array("A", "J", "M", "X", "K");

			print_r($v);

			// Organiza em ordem assossiativa reversa
			arsort($v);

			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>