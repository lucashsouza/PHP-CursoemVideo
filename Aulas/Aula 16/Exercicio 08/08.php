<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title> [08] str_word_count </title>
</head>
<body>
<div>
	<?php
		// str_word_count Tem a função de contar as palavras.

		echo "<h2><center>Teste da funcao STR_COUNT_WORD</center></h2>";
		
		$txt = "PHP é uma otima linguagem de programação.";
		$cont = str_word_count($txt, 0);

	    /* $cont = 0, conta as palavras.
		* $cont = 1, cria um array com as palavras.
		* $cont = 2, cria um array, que mostra em qual indice a palavra começa.
		* print_r($cont)
		*/


		echo $txt."<br/>";
		echo "<br/>Número de palavras: $cont";

	?>
</div>
</body>
</html>