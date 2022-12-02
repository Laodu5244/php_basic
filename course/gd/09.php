<?php

$w = 200;
$h = 100;
$canvas = imagecreatetruecolor($w, $h);
$img = imagecreatefromjpeg('./images/Front.jpg');
$width = imagesx($img);
$height = imagesy($img);

// 防止变形
if ($width / $w > $height / $h) {
  $width = $height / $h * $w;
} else {
  $height = $width / $w * $h;
}

// 缩略图
imagecopyresampled(
  $canvas,
  $img,
  0,
  0,
  0,
  0,
  $w,
  $h,
  $width,
  $height,
);
header('Content-type:image/jpeg');
imagejpeg($canvas);