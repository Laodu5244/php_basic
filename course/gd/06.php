<?php

// 查看图片信息
$info = getimagesize('./images/code.png');
print_r($info);
echo '<hr>';

// 获取图片资源
$captcha = imagecreatefrompng('./images/code.png');
var_dump($captcha); // 查看类型
echo '<br>';
echo imagesx($captcha); // 宽度
echo '<br>';
echo imagesy($captcha); // 高度