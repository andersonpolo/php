<?php
//Tipos de Dados

//Tipos Básicos

//Strings

$nome = "HCode";
$site = 'www.hcode.com.br';

//Inteiro

$ano = 1969;

//Ponto flutuante ou realpath

$valor = 12.63;

//Booleano
 
$bloqueado = false;

//////////////////////////////////////////////////////////
 
//Tipos Compostos

//Array

$onibus = array( "Sâhmella", "Nehemias", "Annah Clara", "Rutelene", "Anderson");

echo $onibus[2], "<br/>";

//Objeto

$nascimento = new DateTime();

var_dump($nascimento);

echo "<br/>";

//////////////////////////////////////////////////////////////

//Tipos Especiais

//Resource

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo);

echo "<br/>";

//Null

$nulo = Null;
$vazio = "";

echo $nulo, $vazio;

var_dump($nulo);

echo "<br/>";

var_dump($vazio);


?>