<!DOCTYPE html>
<html>
<head>
	<title>arquivos e diretorios</title>
</head>
<body>
<?php
	/* manipulação de arquivos
	 * 
	 * $fp = fopen("/home/../PHP/file.txt", "r");
	 * $fp = fopen("/home/../PHP/file.gif", "wb");
	 * $fp = fopen("https://www.example.com/", "r");
	 * $fp = fopen("ftp://user:password@example.com/", "w");
	 */

	//feof = na linguagem C (final de arquivo - End Of File);
	//TRUE se estiver no fim // FALSE caso contrario

	//int feof(int identificador)

	//fgets - lê uma linha do arquivo. retorna uma string
	// com até (tamanho-1) bytes lidos
	//se ocorrer erro retorna FALSE

	//string fgets(int identificador [, int modo])

	/* EXEMPLO
	 */
	  $fd = fopen("/var/www/html/arquivos.php", "r");
	  while(!feof($fd))
	  {
	  		//lê uma linha do arquivo
	 		$buffer = fgets($fd, 4096);
	 
	 		//imprime a linha
	 		echo $buffer . "<br>";
	  }
	  fclose($fd);
	 



  ?>
</body>
</html>