<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> </title>
	<style>
		#resp {
			color: red;
		}
	</style>
</head>
<body>
<div>
	<?php
		$c = 0;										// Cont de n primos
		$n = isset($_GET["num"])?$_GET["num"]:0;		// var do Num digitado
		
		echo "Analisando o numero: $n <br/>";


		echo "Numeros multiplos: ";
	 	for($p=1;$p<=$n;$p++){						
        if($n%$p==0){								// Calcula os Divisiveis
        echo"$p "; 									// Mostra os primos 
        $c++;
        }
     }

     	echo "<br/>";

     	echo "Total de multiplos: $c<br/>";

     	echo "<label id='resp'>";
     	if ($c == 2) {
     		echo "<br/>É PRIMO!";
     	}
     	else {
     		echo "<br/> NÃO É PRIMO!";
     	}
     	echo "</label>";

	?>
	<a href="javascript:history.go(-1)"><br/><font color=blue size=4> Voltar </a></font>
</div>
</body>
</html>