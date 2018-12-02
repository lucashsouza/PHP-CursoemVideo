<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/estilo.css"/>
	<meta charset="utf-8"/>
	<title>[03] Wordrap </title>
</head>
<body>
<div>
	<?php
		// wordrap é utilizado para quebra de textos.
		echo "<h2><center>Teste da funcao WORDRAP</center></h2>";

		$t = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet vehicula tellus. Quisque ultrices augue eget quam mattis, et lobortis lacus porta. Praesent eget enim scelerisque, fringilla nunc ac, porttitor mi. Etiam ac dolor sed dolor congue tincidunt. Nunc at sodales odio. Nulla facilisi. Vestibulum auctor enim ex, non pretium urna scelerisque id. Donec feugiat quam et odio scelerisque, eu maximus quam pellentesque. Suspendisse posuere, dolor sed viverra finibus, magna nulla faucibus magna, vel vestibulum tortor urna quis ligula. Nunc rhoncus, magna et malesuada ullamcorper, purus arcu aliquet nisi, at venenatis diam ante ut nibh. Nullam non magna congue, tincidunt leo nec, porttitor tortor. Mauris est felis, efficitur eget volutpat iaculis, lobortis nec ligula. Vestibulum fringilla dolor quis elit varius tincidunt. Maecenas et arcu nec quam porttitor fermentum sed vitae lectus. Vestibulum nulla mauris, suscipit sed leo eu, ultricies lacinia ipsum.";

		// False não quebra palavras com mais de x letras
		// True quebra palavras com mais de x letras
		
		$r = wordwrap($t, 20, "<br/>\n", false);

		echo $r;

	?>
</div>
</body>
</html>