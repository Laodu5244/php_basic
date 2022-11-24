<?php

// 如果编译乱码 可以添加个请求头方法
header('Content-Type: text/html; charset=utf-8');

// 字符串
$str = 'php is best on the world!';
echo "this is a string: {$str}";
echo '<br>';

// 转译字符
$msg = "hello,\"world\"!";
echo $msg;

// 输出带html标签的字符串
$hello = "<h2 style='color:red;'>hello php</h2>";
echo $hello;

// 定界符: 用于比较复杂的文本
$str = <<<php
	<div style='background:pink'>
		<div style='color:blue;'>hello php</div>
		<p style='color:green;'>php is best on the world!</p>
		<script> console.log('php is good'); </script>
	</div>
php;
echo $str;

/* 字符串操作函数 */

// 获取字符串长度
$name = 'Tom';
echo '字符串$name的长度是: '.strlen($name);
echo '<br>';

// 获取中文字符串长度
$hero = '西门吹雪';
echo '字符串$hero的长度是: '.mb_strlen($hero,'utf8');
echo '<br>';

// 去除空格
$string = 'Hello World,666     ';
echo strlen(trim($string));
echo '<hr>';

// 转小写
echo strtolower($string);
echo '<br>';

// 转大写
echo strtoupper($string);
echo '<br>';

// 首词首字母大写
echo ucfirst('hello, world.');
echo '<br>';

// 所有词首字母大写
echo ucwords('hello, world.');
echo '<hr>';

// MD5加密
echo md5('admin');
echo '<hr>';

// 拆分字符串为数组
$file = 'card.jpg';
$arr = explode('.',$file);
print_r($arr);
echo '<br>';

// 合并数组为字符串
$photo = implode('.',$arr);
echo $photo;
echo '<br>';

// 截取字符串(下标)
echo substr($photo,2);
echo '<br>';

// 截取中文字符串
$txt = '自学编程之旅';
echo mb_substr($txt,2,4,'utf-8');