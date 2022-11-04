<?php

// 创建一个函数
function fun(){
  echo '这是一个函数';
}
fun();
echo '<br>';

// 参数
function num($num1,$num2){
  return $num1+$num2;
}
$result = num(10,20);
echo $result;
echo '<br>';

$name = 'Lisa';
function name(){
  // global: 函数内使用函数外变量
  global $name;
  return $name;
}
echo name();
echo '<br>';
