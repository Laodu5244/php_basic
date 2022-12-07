<?php

// 排序
$array = [5, 2, 7, 1, 9, 3];

function sortNum($arr) {
	$len = count($arr);
	$n = count($arr) - 1;

	for ($i = 0; $i < $len; $i++) {
		for ($j = 0; $j < $n; $j++) {
			if ($arr[$j] > $arr[$j + 1]) {
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j + 1];
				$arr[$j + 1] = $tmp;
			}
		}
	}
	return $arr;
}
var_dump(sortNum($array));

// 递归排序(静态变量)
function call() {
	static $i= 1;
	echo $i.' ';
	$i++;
	if($i<=10){
		call();
	}
}
call();
echo '<br>';

// 递归排序(全局变量)
$num = 1;
function call2(){
	global $num;
	echo $num.' ';
	$num++;
	if($num<=10){
		call2();
	}
}
call2();
echo '<br>';

$param = 1;
function call3(&$param = 1){
	echo $param.' ';
	$param++;
	if($param <= 10){
		call3($param);
	}
}
call3();