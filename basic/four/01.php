<?php

// 正则表法式
$status = preg_match('/a/','all');
var_dump($status);
echo '<br>';

// \d: 0-9 \D: ^0-9 元字符
$num = preg_match('/\d/','demo1');
var_dump($num);
echo '<br>';

// /w: a-z A-Z 0-9_ \W: ^a-z A-Z 0-9_
$w = preg_match('/\w/','A_b');
var_dump($w);
echo '<br>';

// \s: 空格 \n: 换行
$trim = preg_match('/\s/','  ');
var_dump($trim);
echo '<br>';

// 原子表 []
$msg = preg_match('/[abc]/','a123');
var_dump($msg);
echo '<br>';

$number = preg_match('/[0-9]/','ab123');
var_dump($number);
echo '<br>';

// .可以匹配除换行外任何字符
$message = preg_match('/./','@#$%^&*()');
var_dump($message);
echo '<br>';

// ^取反
$n = preg_match('/[^678]/','1234214634');
var_dump($n);
echo '<br>';

// 小案例
$str = '1.jpb@2.jpg#3.jpg';
// preg_split: 拆分成数组
$files = preg_split('/[@#]/',$str);
var_dump($files);
echo '<br>';

// 合并成字符串
echo implode(',', $files);
echo '<br>';

// 原子组() 原子表[]
$nums = preg_match('/(12)/', 12);
var_dump($nums);
echo '<br>';

$data = 'php is best on the world, I love php!';
$preg = "/(php)/";
echo preg_replace($preg,'<span style="color:red">\1</span>',$data);
