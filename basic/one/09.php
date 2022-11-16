<?php

# 字符串操作寒函数

$string = 'string';
$msg = 'hello world';
// 连接字符串
echo $string.$msg.'<br>';

// 输出字符串的长度
echo strlen($txt).'<br>';

// 输出中文字符串的长度
echo mb_strlen("全栈开发",'utf8').'<br>';

// trim: 去除空格
$str = "   lorem   ";
echo strlen(trim($str)).'<br>';


// strtoLower: 转小写,strtoupper: 转大写
$name = 'Jack,php';
echo strtoLower($name).'<br>';
echo strtoupper($name).'<br>';

//ucfirst: 首词大写,ucwords: 所有词首字母大写
echo ucfirst($name).'<br>';
echo ucwords($name.$str).'<br>';
