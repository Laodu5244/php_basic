<?php

// 浮点数
echo '字符串转换为浮点数:<br>';
var_dump(floatval('12.35'));
echo '<hr>';
echo '布尔值转换为浮点数:<br>';
var_dump(floatval(true));
var_dump(floatval(false));
echo '<hr>';

// 浮点数的比较
$a = 1.23456789;
$b = 1.23456780;
$epsilion = 0.00001;

if(abs($a-$b) < $epsilion){
  echo '相等';
}else {
  echo '不相等';
}