<!DOCTYPE html>
<html>
<head>
	<title>03 - Array</title>
	<meta charset="utf8">
</head>
<body>
<div>
	<pre> 
		<table border="2"><tr>
			<?php
				echo "<b>Visualizar array em uma tabela:\n </b>";
				$c = range(5, 20, 2);
				
				foreach($c as $v){
					echo "<td>$v</td> ";
				}

			?>
		</table>
	</pre>
</div>
</body>	
</html>
