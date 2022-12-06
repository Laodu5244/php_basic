<?php

// 写入
$file = fopen('./store/index.txt', 'rb+');
$data = fwrite($file, 'php is good');

var_dump($data);

// 内置方法
$len = file_put_contents('./store/index.txt', 'php is best on the world');
var_dump($len);
echo '<hr>';

// 读取
$file = fopen('./store/index.txt', 'rb+');
echo fread($file,filesize('./store/index.txt'));
fclose($file);
echo '<br>';

// 内置方法
echo file_get_contents('./store/index.txt');