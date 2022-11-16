<?php 

// 类型转换
$age = 18;
// 强制改变,原值不变,只是引用了新类型
$str = (string) $age;
echo gettype($age);
echo '<hr>';
echo gettype($str);
echo '<hr>';

// 永久转换
settype($age,'string');
// is_string(): 判断是不是字符串 1为true
echo (is_string($age));
echo '<hr>';

