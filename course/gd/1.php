<?php

// 判断是否有GD库
var_dump(extension_loaded('GD'));
echo '<br>';

// 创建画布
$canvas = imagecreatetruecolor(500,500);
var_dump($canvas);
echo '<br>';

// 文本盒子 
$font = realpath('./SIMKAI.TTF');
$text = 'Php is best!';
$box = imagettfbbox(20,0,$font,$text);
print_r($box);
echo '<br>';

// 生成随机字符
$str = '1234567890abcdefghijklmnopqrstuvwxyz';
$a = $str[mt_rand(0,strlen($str)-1)];
var_dump($a);
phpinfo();