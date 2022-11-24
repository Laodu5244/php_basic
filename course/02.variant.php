<?php

echo '<hr>';
// 用$定义一个变量,必须字母和下划线开头
$num = 100;
echo $num;
echo '<hr>';

// 赋值
$num1 = 10;
$num2 = $num1;
$num2 = 20;

echo $num1;
echo '<br>';
echo $num2;
echo '<hr>';

// 赋址
$num3 = 10;
$num4 = &$num3; # 赋值变量地址
$num4 = 20;

echo $num3;
echo '<br>';
echo $num4;
echo '<hr>';

/* ------------------- */

// 可变变量
$girl = 'Lisa';
$$girl = 'My name is Lisa';
echo $girl;
echo '<br>';
echo $Lisa;
echo '<hr>';

// 全局变量
var_dump($_GET);
var_dump($_POST);
echo '<hr>';

// 函数内不能访问外部变量
$name = 'Lisa';
function show() {
	// global: 声明全局变量
	global $name; 
	echo $name;
}
show(); 
echo '<hr>';

// static: 静态变量(可以数据持久化)
function make() {
	static $number = 10;
	$number = $number + 10;
	return $number.'<br>';
}
echo make();
echo make();
echo make();
echo '<hr>';

/* ------------------- */

// isset: 判断变量是否存在
$age = 18;
var_dump(isset($age));
// unset: 卸载一个变量 
unset($age);
// empty: 判断变量是否为假(与isset正好相反)
var_dump(!empty($age));