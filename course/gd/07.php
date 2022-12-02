<?php

// 设置请求头
header('Content-type:image/jpg');
// 获取验证码和背景图
$bg = imagecreatefromjpeg('./images/Front.jpg');
$captcha = imagecreatefrompng('./images/code.png');

// 覆盖
imagecopy(
  $bg,
  $captcha,
  0,
  0,
  0,
  0,
  imagesx($captcha),
  imagesy($captcha),
);

// 透明度(0-100),png格式有可能不兼容
imagecopymerge(
  $bg,
  $captcha,
  50,
  200,
  0,
  0,
  imagesx($captcha),
  imagesy($captcha),
  20,
);

imagejpeg($bg);