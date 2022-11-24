<?php

// 运算符
$num1 = 20;
$num2 = 10;
echo '<hr>';

echo $num1 + $num2; # 加法
echo '<br>';
echo $num1 - $num2; # 减法
echo '<br>';
echo $num1 * $num2; # 乘法
echo '<br>';
echo $num1 / $num2; # 除法
echo '<br>';
echo $num1 % $num2; # 取余
echo '<hr>';

$num = 1;
echo $num++;
echo '<br>';
echo ++$num;
echo '<br>'; 
echo $num--;
echo '<br>';
echo --$num;
echo '<hr>';

// 赋值运算符
echo $num += 10;
echo '<br>';
echo $num -= 10;
echo '<br>';
echo $num *= 10;
echo '<br>';
echo $num /= 10;
echo '<br>';
echo $num %= 10;
echo '<br>';

$str = 'php ';
echo $str .= 'is good';
echo '<hr>';

// 比较运算符
$string = '10';
$number = 10;
var_dump($string == $number);
var_dump($string === $number);
echo '<br>';

var_dump($string != $number);
var_dump($string !== $number);
echo '<hr>';

$count = 2;
var_dump($count > 2);
var_dump($count >= 2);
var_dump($count <> 2); # 不等于
echo '<hr>';

// 逻辑运算符
var_dump(true && true); # 逻辑与
var_dump(true and false); # 逻辑与
echo '<br>';
var_dump(true || false); # 逻辑或
var_dump(false or false); # 逻辑或
echo '<br>';
var_dump(!false); # 逻辑非
echo '<hr>';

// 三元表达式
$name = "Lisa";
echo $name ? $name : "Tina";
echo '<br>';
echo $name ?: "Tina"; # 简写
echo '<br>';

// 双问号表达式: 如果值不存在或者为空则输出后面的值
echo $null ?? "nothing";