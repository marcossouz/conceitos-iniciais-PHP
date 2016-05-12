<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Variaveis</title> 
	</head> 
<body>

	<?php
		$nome = "Joao";
		$sobrenome = "da silva";
		echo "<br>$sobrenome, $nome<br>";

		// --------------- Exemplo de variavel -------------
		//$codigo_cliente
		//$codigoCliente

		//Define o nome da variavel
		$variavel = 'nome';

		//cria variavel identificada pelo conteudo de $variavel
		$$variavel = 'maria';

		//exibe variavel $nome na tela
		echo $nome; //resultado = maria

		$a = 5;
		$b = $a;
		$b = 10;
		echo "<br><br>";
		echo $a; //resultado 5
		echo "<br>";
		echo $b; //reultado 10

		//referencias
		$a = 5;
		$b = &$a;
		$b = 10;
		echo "<br><br>";
		echo $a; //resultado 10
		echo "<br>";
		echo $b; //resultado 10




	?>


</body>

