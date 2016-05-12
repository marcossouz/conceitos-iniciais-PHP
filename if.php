<!DOCTYPE html>
<html>
<head>
	<title>if</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
	$salario 			= 1020;	//R$
	$tempo_servico		= 12;	//meses
	$tem_reclamacoes	= false;//booleano
	if($tempo_servico >= 12)
	{
		if ($tem_reclamacoes != true) 
		{
			echo 'Parabéns, você foi promovido';
		}
	} 	

	if(($salario > 100) and ($tempo_servico >= 12) and ($tem_reclamacoes != true))
	{
		echo '<br><br>Parabéns, você foi promovido<br><br>';

	}

	$a = 1;
	while ($a < 5)
	{
		print($a);
		$a++;	
	}
		echo '<br><br>';
	for ($i = 0; $i <= 10 ; $i++) 
	{ 
		print($i);
	}
		echo '<br><br>';
	$a = 1;
	for ($i = 0; $i < 5 ; $i++) 
	{ 
		for ($j = 0; $j < 4; $j++) 
		{ 
			for ($k = 0; $k < 3; $k++) 
			{ 	
				print($a);
				if($a%10 == 0) echo '<br>';
				$a++;
			}
		}
	}

	echo '<br><br>';

	$fruta = array("mãça", "laranja", "pêra", "banana");
	foreach ($fruta as $valor)
	{
		print("$valor - ");
	}





	 ?>



</body>
</html>