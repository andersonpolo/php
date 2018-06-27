<?php 
/*Quando o pulo é um número multiplo do divisor, a divisão é perfeita se o indice começar em zero,
mas se o indice começar em 1, a sequencia de restos das divisões será uma sequencia ordenada, divisor - 1 , crescente ou decrescente.*/

$pulo = 4;

$div = 11;

for($i = 0; $i <= 100; $i+=$pulo){

	if($i % $div == 0) echo $i . " - Divisão Perfeita!<br>";

	if($i % $div != 0)echo $i . " - Divisão Imperfeita! = " . $j = $i%$div . "<br> ";
}

	
 ?>