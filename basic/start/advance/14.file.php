<?php

// 文件路径
echo __FILE__;
echo '<br>';

$path = '14.cache.php';
$type = filetype($path);
var_dump($type);

$file = fopen('14.cache.php','r+ ');
var_dump($file);



