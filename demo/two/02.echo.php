<?php

// 声明变量
$name = 'jack';
$age = 18;
$flag = true;

// 查看变量
echo '$name的数据类型是:'.gettype($name);
echo '<hr>'; // 换行
echo '$age的数据类型是:'.gettype($age);
echo '<hr>';
echo '$flag的数据类型是:'.gettype($flag);
echo '<hr>';

// 查看值与类型
var_dump($name);
echo '<hr>';
var_dump($age);
echo '<hr>';
var_dump($flag);

