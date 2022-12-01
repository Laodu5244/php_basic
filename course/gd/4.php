<?php

header('Content-type:image/png');
$canvas = imagecreatetruecolor(500, 500);

// 创建颜色
$bg = imageColorAllocate($canvas, 230, 230, 230);
$green = imageColorAllocate($canvas, 0, 255, 0);
$blue = imageColorAllocate($canvas, 0, 0, 255);
$red = imageColorAllocate($canvas, 255, 0, 0);
$grey = imageColorAllocate($canvas, 150, 150, 150);

imageFill($canvas, 0, 0, $bg);
imageEllipse($canvas, 250, 250, 400, 400, $green);
imagefilledellipse($canvas, 250, 250, 200, 200, $red);

// 干扰线
for ($i = 0; $i < 30; $i++) {
  imageline(
    $canvas,
    mt_rand(0, 500),
    mt_rand(0, 500),
    mt_rand(0, 500),
    mt_rand(0, 500),
    $grey
  );
}

// 插入字体
$font = realpath('./SIMKAI.TTF');
$text = 'php是最好的后端语言';
for ($i = 0; $i < mb_strlen($text, 'utf-8'); $i++) {
  imagettftext(
    $canvas,
    20,
    mt_rand(-20, 20),
    25 * $i,
    50,
    $blue,
    $font, mb_substr($text, $i, 1, 'utf-8')
	);
}

// 文本盒子 
$box = imagettfbbox(18,0,$font,$text);
$width = $box[2] - $box[0];
$height = $box[1] = $box[7];

// 右下角显示
imagettftext(
	$canvas,18,0,500-$width,498,$red,$font,$text
);
// 中间显示
imagettftext(
	$canvas,18,0,250-$width/2,250-$height/2,$green,$font,$text
);

// 渲染到页面
imagepng($canvas);
// 保存图片到本地
imagepng($canvas, './images/1.png');
// 关闭画布
imagedestroy($canvas);