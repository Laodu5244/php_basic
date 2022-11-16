<?php

$a = 10;
$b = '10';

// 比较运算符,双等于只比较值,不比较类型
if ($a == $b) {
  echo '相等';
} else {
  echo '不相等';
}
echo '<hr>';

// 三等于又比较值,又比较类型
if ($a === $b) {
  echo '相等';
} else {
  echo '不相等';
}
echo '<hr>';

$c = 5;
$d = 6;
if($c != $d){
  echo '正确';
} else {
  echo '错误';
}