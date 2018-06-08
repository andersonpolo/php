<?php
//precedencia de operadores () (**) (*) (/) (+) (-) 

$resultado = ((10 * 2.2) / 2) - 36 ** 2;

echo $resultado;

echo "<br>";

// (&&) and (||) or

$valor = 8 > 6 && 7 < 5;

var_dump($valor);

echo "<br>";

$valor2 = 9 >= 16 || 0 == 0;

var_dump($valor2);


?>