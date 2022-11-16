<?php

// 文件路径
echo __FILE__;
echo '<br>';

$path = '14.file.php';
$type = filetype($path);
var_dump($type);

$file = fopen('14.file.php','r+ ');
var_dump($file);



