<?php
//Observar o uso das aspas simples e duplas.

$nome = "Hcode";

$nome2 = 'treinamentos';

var_dump($nome, $nome2);

echo "<br>";

echo $nome . " " . $nome2;

echo "<br>";

// no echo ao usar ("") você imprime o valor da variavel na saida, num texto direto.

echo "ABC $nome";

echo "<br>";

echo "Este é o melhor curso web:"," $nome  $nome2.";

echo "<br>";

// mas quando se usa ('') o echo coloca na saída como se fosse tudo texto, sem verificar, imprime o nome da variável.

echo 'ABC $nome';

 ?>
