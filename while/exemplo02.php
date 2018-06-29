<?php 

$total = 150;
$desconto = 0.9;
$cont = 0;
do{

	$total *= $desconto;
	$cont++;

} while ($total > 100);	

echo "O total de Desconto foi $total, depois de $cont vezes.";

 ?>