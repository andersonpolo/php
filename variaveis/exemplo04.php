<?php 
/* Variáveis pré definidas (Arrays super globais)
Para este exemplo é preciso usar após a url a ? e informar os valores das variaveis neste caso usando & pois se trata de mais de uma,
exemplo: http://localhost/variaveis/exemplo04.php?a=12300&b=5000
*/
$nome = (int)$_GET["a"];

var_dump($nome);

echo "<br/>";

$nome1 = (int)$_GET["b"];

var_dump($nome1);

$tot = $nome + $nome1;

$tot1 = $nome * $nome1;

$tot2 = $nome / $nome1;

$tot3 = $nome - $nome1;

$tot4 = $nome % $nome1;

echo "<br/>", " Somando, " . $tot . "<br/> Multiplicando, " . $tot1 . "<br/> Dividindo, " . $tot2 . "<br/> Subtraindo, " . $tot3 . "<br/> Resto da Divisão, " . $tot4;

echo "<br/>";

$ip = $_SERVER["HTTP_USER_AGENT"];

var_dump($ip);

echo "<br/>";

$ip1 = $_SERVER["HTTP_ACCEPT_ENCODING"];

var_dump($ip1);

echo "<br/>";

$ip2 = $_SERVER["GATEWAY_INTERFACE"];

var_dump($ip2);
 
?>
