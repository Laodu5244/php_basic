<?php

$name = 'lisa';
function make() {
  global $name;
  echo $name;
  // 作用域内部删不了外部的变量
  unset($name);
  echo '<br>';
}
make();
echo $name;
echo '<br>';

function method(){
  $num =1;
  $num = $num+1;
  return $num.'<br>';
}

echo method();
echo method();

function method2(){
  static $num =1; // 存储变量
  $num = $num+1;
  return $num.'<br>';
}

echo method2();
echo method2();