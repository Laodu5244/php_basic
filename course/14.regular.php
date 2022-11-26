<?php

/**
 * 正则表达式:
 * 元字符 \d: 0-9, \D: ^0-9
 * \w a-zA-Z0-9_, \W ^a-zA-Z0-9_
 * 空白符 \s ,除了空白符 \S
 * 换行符 \n 
 * 制表符 \t
 * . 可匹配出换行符外任何字符
 * 原子表[]
 * 原子组()
 */

// preg_match: 包含方法,返回布尔值
$status= preg_match('/a/','lang');
var_dump($status);
echo '<br>';

// 检测字符串是否有数字
$status = $status= preg_match('/\d/','lang');
var_dump($status);
// 除了字符串是否有其他值
$status = $status= preg_match('/\D/','lang');
var_dump($status);
echo '<br>';

// 数字字母下划线
$status = $status= preg_match('/\w/','**_##');
var_dump($status);
// 除了数字字母下划线
$status = $status= preg_match('/\W/','123_abc');
var_dump($status);
echo '<br>';

// 是否有
$status = $status= preg_match('/\s/','hello world');
var_dump($status);
// 除了空白符,换行符
$status = $status= preg_match('/\S/',' ');
var_dump($status);
echo '<br>';

// 换行符
$status = $status= preg_match('/\n/',"\n");
var_dump($status);
// 制表符
$status = $status= preg_match('/\t/',"\t");
var_dump($status);
echo '<hr>';

// 原子表 []
$status = preg_match('/abc/','a');
var_dump($status);
$status = preg_match('/[abc]/','a');
var_dump($status);
$status = preg_match('/[0-9]/','3');
var_dump($status);
// 原子表区分大小写
$status = preg_match('/[a-z]/','E');
var_dump($status);
echo '<br>';

// . 可匹配出换行符外任何字符
$status = preg_match('/./','@%');
var_dump($status);

// ^ 取反
$status = preg_match('/[^789]/','789');
var_dump($status);
echo '<hr>';

// 拆分字符串
$str = '1.jpg@2.jpg#3.jpg';
$files = preg_split('/[@#]/',$str);
print_r($files);
echo '<br>';

// 数组合并字符串
echo implode('-',$files);
echo '<hr>';

// 原子组() 必须完全匹配
$status = preg_match('/(12)/',21);
var_dump($status);
echo '<br>';

// 替换
$string = 'baidu.com-bilibili.com-youku.com';
$preg = "/(\.)(com)/";
echo preg_replace($preg,'\1<span style="color:red;">\2</span>',$string);
echo '<hr>';

// 限定位置 
$status = preg_match('/12$/','1200'); # $: 限定结尾
var_dump($status);
$status = preg_match('/^12/',1234); # ^: 限定开头
var_dump($status);