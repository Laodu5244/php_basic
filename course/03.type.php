<?php

/**
 * 数据类型:
 * 
 * string: 字符串
 * int: 整型
 * float: 浮点型
 * boolean: 布尔型
 * array: 数组
 * object: 对象
 */

// 字符串
$name = 'Lisa';
var_dump($name);
echo '<br>';

// 整数
$num = 100;
var_dump($num);
echo '<br>';

// 浮点数
$PI = 3.14;
var_dump($PI);
echo '<br>';

// 布尔
$bool = true;
var_dump($bool);
echo '<br>';

//数组
$arr = [];
var_dump($arr);
echo '<br>';

// 对象
class User {};
$user = new User();
var_dump($user);
echo '<hr>';

/* ------------------- */

// 八进制转十进制
echo octdec(700);
echo '<br>';

// 十六进制转十进制
echo hexdec('F5C');
echo '<hr>';

/* ------------------- */

// 空数组,null,空字符串,数字0为假
var_dump([]==true);
echo '<br>';
var_dump(null==true);
echo '<br>';
var_dump(''==true);
echo '<br>';
var_dump(0==true);