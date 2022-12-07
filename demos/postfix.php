<?php

// 获取文件后缀
$file = './store/index.txt';
var_dump(pathinfo($file));

$name = pathinfo($file,PATHINFO_EXTENSION);
echo '$file的后缀是: '.$name;
echo '<br>';

// substr
echo 'substr获取后缀: '.substr($file,-3);

// 尾部添加内容
$file = fopen('./store/index.txt','ab+');
echo fwrite($file, ' Java script');
fclose($file);

$val = file_put_contents('./store/index.txt',' hello world',FILE_APPEND);
echo $val;