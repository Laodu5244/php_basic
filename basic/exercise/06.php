<?php

// 函数
function name() {
  echo 'hello php!'.'<br>';
}
name();

function write() {
  echo ': lisa';
}
echo 'My name is';
write();
echo '<hr>';

function who($name,$age){
  echo '我的名字是: '.$name.'我今年: '.$age.'<br>';
}
who('Lisa ',18);
who('Jack ',15);
who('Tina ',24);
echo '<hr>';

$x = 5;
function fun() {
  $y = 10;
  echo '函数内:';
  echo '<br>';
  echo "变量 x 为: $x";
  echo '<br>';
  echo "变量 y 为: $y";
  echo '<br>';
}

fun();

echo '函数外:';
echo '<br>';
echo "变量 x 为: $x";
echo '<br>';
echo "变量 y 为: $y";
echo '<hr>';

$a = 66;
$b = 3.14;
function test() {
  global $a, $b;
  $b = $a + $b;
}
 
test();
echo $b; 
echo '<hr>';

function demo() {
  static $x = 0;
  echo $x;
  $x++;
  echo PHP_EOL;
}

demo();
demo();
demo();
echo '<hr>';