<?php

$img = "./1.jpg";

$info = getimagesize($img);
$type = image_type_to_extension($info['2'],false);

// 创建新图片
$ext = "imagecreatefrom{$type}";
$image = $ext($img);

$content = "Hello PHP";
$color=imagecolorallocatealpha($image,250,133,12,0);

// 水印
imagettftext($image,20,0,80,100,$color,'./SIMKAI.TTF',$content);
header("Content-type:".$info['mime']);

$fun = "image{$type}";
$fun($image);