<?php

$condicao = true;

while($condicao){
    
    $numero = rand(1, 7);

    if ($numero === 7){

    	echo "  Passou a vez!!! ";
    	$condicao = false;

    }

    echo "<h3> $numero <h3>" . "  ";
    
}


?>