<?php

// 函数
function show() {
	return '函数的返回值';
}
var_dump(show());
echo '<br>';

// 函数传值
function msg($title) {
  echo $title;
}
$title = 'php is best on the world!';
msg($title);
echo '<br>';

// 函数传址
function add(&$var) {
  $var++;
	echo $var;
}
$var = 1;
add($var);
echo $var;
echo '<br>';

// 点语法(拓展运算符)
function sum(...$vars){
	return array_sum($vars); # 求和
}
echo sum(3,42,1,6,87);
echo '<hr>';

// 参数
function mobile1($tel) {
	return substr($tel, 0, -4).'****';
}
echo mobile1('15031381438');
echo '<br>';

// 参数默认值
function mobile2($tel,$fix='****') {
	return substr($tel,0,-4).$fix;
}
echo mobile2('15031381438');
echo '<br>';
echo mobile2('15031381438','####');
echo '<br>';

function mobile3($tel,$num=4,$fix='*') {
	return substr($tel,0,-1*$num).str_repeat($fix,$num);
}
echo mobile3('15031381438',8,'~');
echo '<hr>';

// 类型约束
function type(int $num) {
	return $num;
}
var_dump(type(2));
echo '<br>';

// 返回值约束
function str(): ?string {
	// ?string :可以返回空或者字符串
	return 'hello world';
}
echo str();
echo '<hr>';

// 变量能见度
$name = 'Lisa';
function name() {
	global $name; # 申明全局变量
	echo $name;
}
name();
echo '<hr>';

// 静态变量
function _static() {
	static $number = 10;
	return $number += 10;
}
echo _static();
echo '<br>';
echo _static();
echo '<br>';
echo _static();
echo '<hr>';

// 变量函数
function call() {
	return 'this is a callback function.';
}
$callback = 'call';
echo $callback();
echo '<hr>';

$file = 'girl.jpg';
$action = trim(strrchr($file,'.'),'.');
function jpg() {
	return 'jpg function is doing';
}
if(function_exists($action)): echo $action($file);
else: echo '类型不能识别'; endif; 
echo '<hr>';

// 递归函数
function recursive($val){
	if($val == 1) return $val;
	return $val*recursive($val-1);
}
echo recursive(5);