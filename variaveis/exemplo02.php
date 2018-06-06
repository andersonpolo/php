<?php
//Padrão camelCase

$anoNascimento = 1969;

echo $anoNascimento, "</br>";

var_dump($anoNascimento);

echo "</br>";

$nomeCompleto = "Anderson Polo de Faria";

echo $nomeCompleto, "</br>";

var_dump($nomeCompleto);

echo "<br/>";

//Para concatenar usamos o ponto "."

$dado = $nomeCompleto . " , " . $anoNascimento;

echo $dado;

//Para parar a execução do codigo usamos exit

exit;

// O unset() limpa as variáveis

//unset($anoNascimento, $nomeCompleto);


//O isset() verifica se a variavel existe.

if (isset($anoNascimento)) {
  
echo $anoNascimento, "</br>";


}

if (isset($nomeCompleto)) {
	
	echo $nomeCompleto, "</br>";
	
}

?>