<?php
$num = 0;
$num2 = 1;
for($sq =0;$sq<=19;$sq++) {
	$num=$num+$num2;
                    $num2=$num-$num2;
                    echo $num.'<br>';
}

?>