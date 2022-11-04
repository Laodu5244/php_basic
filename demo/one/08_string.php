<?php

$str = 'php is best on the world';
echo $str;
echo '<hr>';

// 设置编码格式
header('Content-type:text/html;charset=utf-8');
$msg = 'utf-8';
echo "请求头设置成{utf-8},不会乱码";
echo '<hr>';

$string = "我爱编程\\,\"php and java script\"";
echo $string;
echo'<br>';

$txt = 'Lorem ipsum dolor\n sit, amet.';
echo $txt;
echo'<br>';

$txt = <<<php
<h2 style="color:greenyellow">I love php</h2>
<p style="color:tomato">php is good</p>
php;
echo $txt;

?>

