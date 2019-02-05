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
			echo "<b>Manipulando último elemento array\n</b>";

			$v = array("A", "J", "M", "X", "K");

			// Add ultimo item array
			echo "<b>\nUtilizando array_push():\n</b>";
			array_push($v, "O");

			echo "<br/>";
			print_r($v);

			// Elimina o ultimo item array
			echo "<b>\nUtiliando array_pop():\n</b>";
			array_pop($v);

			echo "<br/>";
			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>