<!DOCTYPE html>
<html>
<head>
	<title>Arquivos</title>
</head>
<body>
<?php 
	//carrega o arquivo com a função necessaria
	include 'biblioteca.php';

	//imprime o quadrado do numero 4
	echo "<br>Quadrado de 4 = ";

	echo quadrado(4);
	echo "<br>Obesidade = ";

	echo calcula_obesidade(70, 1.85);

$total = 0;

echo '<br>percorreu ' . km2mi(100) . " milhas \n";
echo '<br>percorreu ' . km2mi(200) . " milhas \n";
echo '<br>percorreu no total ' . $total . " quilometros \n";

?>
</body>
</html>