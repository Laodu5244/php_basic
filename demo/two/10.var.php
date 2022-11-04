<?php

// 赋值(值传递)
$var1 = 'php';
$var2 = $var1;
// 值传递传递不共享数据,各自独立
$var2 = 'html';
echo "$var1,'----',$var2";
print '<hr>';

// 引用传递
$var3 = &$var1; // 引用赋值
// 引用传递共享数据,一个变都会变
$var3 = 'html';
echo "$var3,'----',$var1";
print '<hr>';

// 可变变量
$name = 'pageTitle';
// $$name等于定义了新变量$pageTitle
$$name = 'php中文网';
echo '$name is :'.$name;
echo '<hr>';
echo '$pageTitle is'.$$name;
echo '<hr>';
echo '$pageTitle is'.$pageTitle;