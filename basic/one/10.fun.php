<?php

// 转换成32位字符串(可以用来加密)
echo md5('admin666').'<br>';

// 字符串拆分成数组
$msg = 'hello,world,and,php';
echo json_encode(explode(',',$msg)).'<br>';

// 数组合并字符串
$email = ['email','@laodu.com'];
echo implode(':',$email).'<br>';

// 截取字符串
$file = 'user.jpg';
echo substr($file,0,-4).'<br>';
?>