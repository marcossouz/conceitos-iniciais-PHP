<?php 
	/*
	 * Função quadrado
	 * Retorna o quadrado de um numero
	 */

	 function quadrado($numero)
	 {
	 	return $numero * $numero;
	 } 

	 /*
	  * Função Obesidade
	  * @arg $altura and $peso
	  * return calculo da obesidade realisado
	  */

	function calcula_obesidade($peso, $altura)
	{
	 	return $peso / ($altura * $altura);
	}

	 /*
	  * Função quilometros
	  * Calcula a distancia percorrida
	  */
	function km2mi($quilomentros)
	{
		global $total;
		$total += $quilomentros;
		return $quilomentros * 0.6;
	}
 ?>