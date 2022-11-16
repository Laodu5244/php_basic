<?php

$name = 'Lisa';
$age = 18;
$city = '武汉';

// 函数内部不能使用全局变量
function show($city) {
  echo $GLOBALS['age']; //$GLOBALS全局数组可以使用
  echo '<hr>';

  global $name; // global可以把全局变量叫进来
  echo $name;
  echo '<hr>';

  echo $city; // 可以传参来使用
}
show($city);
echo '<hr>';

// static: 让变量持久保留
function sum (int ...$nums):int {
  static $count = 0; 
  return $count += array_sum($nums);
}

echo sum(1,2,4);
echo '<br>';
echo sum(1,2,4);
echo '<br>';
echo sum(1,2,4);