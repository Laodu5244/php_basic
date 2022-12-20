<?php

$num = 10;
for ($i = 1; $i <= $num; $i++) {
	$total += $i;
}
// echo $total;

// 递归
function sum($num){
	static $total;
	if($num>=1){
		$total += $num;
		return sum(--$num);
	} else {
		return $total;
	}
}
echo sum($num);
