<?php 
//usar por preferencia o require_once
require_once "inc/exemplo01.php";
include_once "inc/exemplo01.php";
/* temos duas versões para uso: o require e o include
devemos dar preferencia ao require, e se for o caso sempre o 
require_once
*/
$resultado = somar(100, 25);

echo $resultado;
 ?>