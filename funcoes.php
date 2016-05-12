<!DOCTYPE html>
<html>
<head>
	<title>funcoes</title>
	<meta charset="UTF-8">
</head>
<body>
<?php  
	//variaveis estaticas - elas mantêm o valor que lhes foi atribuido na ultima execucao.

	function percorre($quilometros)
	{
		static $total;
		$total += $quilometros;
		echo "percorreu mais $quilometros do total de $total<br>"; 
	}

	percorre(100);
	percorre(200);
	percorre(50);

	echo "<br><br>";

	//usando valor default para parametro
	function Incrementa(&$variavel, $valor = 40)
	{
		$variavel += $valor;
	}

	$a = 10;
	Incrementa($a);

	echo $a; //resultado = 50
	echo "<br><br>";

	//funcao com numero de elementos variaveis
	// func_get_args(); - obter quais são os argumentos
	// func_num_args(); - obter a quantidade de argumentos

	function Ola()
	{
		$argumentos = func_get_args();
		$quantidade = func_num_args();

		for ($i = 0; $i < $quantidade ; $i++)
		{ 
			echo 'Ola ' . $argumentos[$i] . "<br>";	
		}
	}

	Ola('João', 'Maria', 'José', 'Pedro');

	//recursão
	//função fatorial

	function Fatorial($numero)
	{
		if($numero == 1)
			return $numero;
		else
			return $numero * Fatorial($numero -1);
	}

	echo "<br>" . Fatorial(5) . "<br>"; //resultado = 120
	echo Fatorial(7) . "<br>"; // resultado = 5040




?>
</body>
</html>