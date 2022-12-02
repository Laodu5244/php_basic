<?php

// 创建画布
header('Content-type:image/png');
$canvas = imagecreatetruecolor(500,500);

// 创建颜色
$bg = imageColorAllocate($canvas,230,230,230);
$red = imageColorAllocate($canvas,255,0,0);
$green = imageColorAllocate($canvas,0,255,0);
$blue = imageColorAllocate($canvas,0,0,255);
$grey = imageColorAllocate($canvas,150,150,150);

// 背景
imageFill($canvas,0,0,$bg);
// 线条
imageline($canvas,0,0,500,500,$blue);
// 线条宽度(在线条之前设置生效)
imagesetthickness($canvas,10);

// 矩形
imageRectangle($canvas,100,100,200,200,$red); 
// 实心矩形
imagefilledrectangle($canvas,300,100,400,200,$red);
// 空心圆
imageEllipse($canvas,150,350,100,100,$green);
// 实心圆
imagefilledellipse($canvas,350,350,100,100,$green); 

// 干扰点
for($i=0;$i<3000;$i++){
	imagesetpixel($canvas,mt_rand(0,500),mt_rand(0,500),$grey);
}

// 干扰线
imagesetthickness($canvas,1);
for($i=0;$i<30;$i++){
	imageline($canvas,mt_rand(0,500),mt_rand(0,500),mt_rand(0,500),mt_rand(0,500),$grey);
}

// 渲染到页面
imagepng($canvas);



