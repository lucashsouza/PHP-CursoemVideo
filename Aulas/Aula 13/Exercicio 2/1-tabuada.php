<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>

	<form method="get" action="2-tabuada.php">
		<select name="num">
			<?php
				for ($c=1; $c<= 10; $c++) { 
					echo "<option>$c</option>";
				}
			?>
		</select>
		<input type="submit" value="Tabuada"/>
	</form>


</div>
</body>
</html>