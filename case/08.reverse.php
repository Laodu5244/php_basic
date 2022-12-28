<?php

$list = ['Jack', 'Lisa', 'Tina'];

// 反转数组
function reverse($arr) {
	$n = count($arr);
	$left = 0;
	$right = $n - 1;

	while ($left < $right) {
		$temp = $arr[$left];
		$arr[$left++] = $arr[$right];
		$arr[$right--] = $temp;
	}
	return $arr;
}

$reverseList = reverse($list);
var_dump($reverseList);

// 函数
var_dump(array_reverse($reverseList));
