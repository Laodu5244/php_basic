<?php

// 判断是否有GD库
var_dump(extension_loaded('GD'));
echo '<br>';

// 创建画布
$canvas = imagecreatetruecolor(500,500);
var_dump($canvas);
