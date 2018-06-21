<?php
//usar por preferencia o require_once
require_once "inc/exemplo01.php";
include_once "inc/exemplo01.php";
/* temos duas versões para uso: o require e o include
devemos dar preferencia ao require, e se for o caso sempre o
require_once
*/
$resultado = somar(1000.49, 25.97);

$total = multiplicar(936.66, 1);

echo  "<h1>A soma é $resultado, a multiplicação é $total</h1>";

 ?>
