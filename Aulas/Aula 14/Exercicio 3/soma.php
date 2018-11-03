<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
</head>
<body>
<div>
	<center>
	<?php
		function soma () {
			$p = func_get_args();			// 	recebe da funcao os valores
			$t = func_num_args();			// recebe da funcao o tot de valores
			$s = 0;

			for ($i=0; $i<$t;$i++) {  		// For para soma
				$s += $p[$i];
				echo " Valor $i: $p[$i] <br/>";
			}
		return $s;
		}

		$r = soma (3, 5, 2, 10, 15);
		echo "<br/>";
		echo "soma é: $r";
	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font></center>
</div>
</body>
</html>