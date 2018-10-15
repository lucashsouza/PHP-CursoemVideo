<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<?php
   		$i = 1;
    	while ($i <= 5) {
      		$v = "num".$i;
      		$url = "v".$i;
      		$$v = isset($_GET[$url])?$_GET[$url] : 0;
      		$i++;
   		}

   		$i = 1;
   			while ($i <= 5) {
      			$v = "num".$i;
      			echo "Valor $i: <b>".$$v."</b><br/>";
      			$i++;
   			}
	?>
	
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4/>Voltar</a></font>

</div>
</body>
</html>