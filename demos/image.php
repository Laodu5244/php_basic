<?php

// php 获取图片
header('Content-type:image/jpg');

// readfile('./water/1.jpg');

// echo file_get_contents('./water/1.jpg');

$file = fopen('./water/1.jpg','rb+');
echo fread($file,filesize('./water/1.jpg'));
fclose($file);