<!DOCTYPE html>
<html>
<head>
	<title>03 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre>
		<?php
			echo "<b>Manipulando primeiro elemento array\n</b>";

			$v = array("A", "J", "M", "X", "K");

			// Add primeiro item array
			echo "<b>\nUtilizando array_unshift():\n</b>";
			array_unshift($v, "O");

			echo "<br/>";
			print_r($v);

			// Elimina o primeiro item array
			echo "<b>\nUtiliando array_shift():\n</b>";
			array_shift($v);

			echo "<br/>";
			print_r($v);
		?>
	</pre>
</div>
</body>	
</html>