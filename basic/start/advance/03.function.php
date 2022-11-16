<?php

// 函数
function test($msg) {
  echo $msg;
}
$msg = 'php is best on the world';
test($msg); # 参数
echo '<hr>';

// 函数返回值
function show ($num1,$num2) {
  return $num1 +$num2;
}
echo show(10,20);
echo '<hr>';

// 形参默认值
function food($food='鸡腿'){
  return '烤'.$food.'很好吃';
}
echo food('羊肉串');
echo '<br>';
echo food();




