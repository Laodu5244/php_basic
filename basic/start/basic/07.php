<?php

// 逻辑运算符
$str = '';
$num = 1;

// 两边都是真才是真,否则返回假
if($str && $num){
  echo '返回真';
}else{
  echo '返回假';
}
echo '<hr>';

// 两边有一个真返回真,否则返回假
if($str || $num){
  echo '返回真';
}else{
  echo '返回假';
}
echo '<hr>';

// 逻辑取反
if (!$str){
  echo '返回真';
}else{
  echo '返回假';
}
echo '<hr>';

// 三元运算符
$msg = 10;
$result = $msg === 10 ? '正确' : '错误';
print $result;