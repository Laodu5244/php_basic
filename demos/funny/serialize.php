<?php

// 序列化
$array = ['PHP','Html','Css','Js'];
$str =  serialize($array);
print $str;
echo '<br>';

// 反序列化
$arr = unserialize($str);
print_r($arr);
echo '<hr>';

// 编码
$url = urlencode('php中文网');
echo $url;
echo '<br>';

// 解码
$de = urldecode($url);
echo $de;
echo '<hr>';

// md5 加密
$password = md5('123456');
echo $password;