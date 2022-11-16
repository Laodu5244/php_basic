<?php

// 不论什么进制的数据,最终都是以十进制显示
var_dump(180);
echo '<hr>';

// 8进制(0开头,只允许0-7表示)
var_dump(035);
echo '<hr>';

// 16进制(0X开头, 10-15用a-f表示)
var_dump(0x3a83);
echo '<hr>';

// 查看本机最大整数
var_dump(PHP_INT_MAX);
echo '<hr>';

// 布尔值转换整数
var_dump(intval(true));
var_dump(intval(false));
echo '<hr>';

// 浮点数转换成整数
var_dump(round(123.87));
var_dump(round(72.237));
echo '<hr>';