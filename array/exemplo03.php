<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>32
));

array_push($pessoas, array(
	'nome'=>'Anderson',
	'idade'=>48
));

print_r($pessoas);

echo "<br>";

print_r($pessoas[0]);

echo "<br>";

print_r($pessoas[0]['nome']);



 ?>