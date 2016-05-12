<!DOCTYPE html>
<html>
<head>
	<title>tipos</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$variavel = 'Isto é um teste<br>';
		$variavel = "<br>Isto é um teste<br>";

		$carros = array('Palio', 'Corsa', 'Gol');

		echo $carros[1]; //resultado 'Corsa';

		//-----------tipo objeto ------------
		print('<br><br>----- Tipo objeto -------<br><br>');

		class Computador
		{
			var $cpu;
			function ligar()
			{
				echo "Ligando o computador a {$this->cpu}...";
			}
		}

		$obj = new Computador;
		$obj->cpu = "500Mhz";
		$obj->ligar();		

		print('<br><br>----- Define -------<br><br>');

		define("MAXIMO_CLIENTES", 100);
		echo MAXIMO_CLIENTES;		

	?>
</body>
</html>