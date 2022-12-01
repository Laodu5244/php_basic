<?php

header('Content-type:image/png');
$canvas = imagecreatetruecolor(500,500);

// 创建颜色
$bg = imageColorAllocate($canvas,230,230,230);
$green = imageColorAllocate($canvas,0,255,0);
$red = imageColorAllocate($canvas,255,0,0);
$grey = imageColorAllocate($canvas,150,150,150);

imageFill($canvas,0,0,$bg);
imageEllipse($canvas,250,250,400,400,$green);
imagefilledellipse($canvas,250,250,200,200,$red); 

// 干扰线
for($i=0;$i<30;$i++){
	imageline($canvas,mt_rand(0,500),mt_rand(0,500),mt_rand(0,500),mt_rand(0,500),$grey);
}

// 渲染到页面
imagepng($canvas);
// 保存图片到本地
imagepng($canvas,'./images/1.png');
// 关闭画布
imagedestroy($canvas);