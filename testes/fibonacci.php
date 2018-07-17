<?php
$num = 1;
$num2 = 0;
for($sq =0;$sq<=20;$sq++) {
	$num=$num+$num2;
                    $num2=$num-$num2;
}
echo $num;
?>