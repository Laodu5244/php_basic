<?php

// 全局变量
echo '<hr>';
$num = 10;
$age = 18;
function param() {
  global $num; # 声明全局变量
  $age = $GLOBALS['age']; # 声明全局变量
  return $num + $age;
}
echo param();
echo '<hr>';

// 静态变量
function inner() {
  static $name = 'Lisa';
  $name = $name .'！';
  return $name;
}
echo inner() . '<br>';
echo inner() . '<br>';
echo inner() . '<br>';
echo '<hr>';

// 递归函数
function other() {
  static $i = 1;
  echo '第'.$i.'次调用.'.'<br>';
  $i++;
  if($i<10){
    other();
  }
}
other();
echo '<hr>';

// 闭包函数
$close = function () {
  echo '闭包函数';
};
$close();
echo '<hr>';

// 回调函数
function add($number){
  echo $number+2;
}
function num(){
  return 3;
}
$result = 'num';
add($result());