<?php 
//if, elseif, else e o operador ternario (cond1 > cond2)?"ola mundo":"Ola marte";


$qualASuaIdade = 218;

$idadeCrianca = 12;

$idadeMaior = 18;

$idadeMelhor = 65;

 if($qualASuaIdade < $idadeCrianca){

 	echo "Criança";

 } elseif($qualASuaIdade < $idadeMaior) {

 	echo "Adolescente";

 } elseif ($qualASuaIdade < $idadeMelhor) {

 	echo "Adulto";

 } else {

 	echo "Idoso";

 }

 echo "<br>";

 echo ($qualASuaIdade >= $idadeMaior)?"Maior de Idade.":"Menor de Idade.";

 ?>