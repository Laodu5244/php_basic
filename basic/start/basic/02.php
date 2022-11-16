<?php

$bool = true; # 布尔
var_dump($bool);
echo '<hr>';

$int = 10; # 整数
var_dump($int);
echo '<hr>';

$float = 3.14; # 浮点
var_dump($float);
echo '<hr>';

$str = '字符串'; # 字符串
var_dump($str);
echo '<hr>';

# heredoc字符串
$string = <<<STR
heredoc的字符串定义方法
STR;
var_dump($string);
echo '<hr>';

// 数据类型转换
$result = strval($int);
var_dump($result);
$noolean = boolval($str);
var_dump($noolean);