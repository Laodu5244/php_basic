<?php

// 字符串反转
$str = 'Hello World';
echo $str.'<br>';

// 递归
function reversall($str) {
	if(strlen($str) > 0 ) {
		reversall(substr($str,1));
	}
	echo substr($str,0,1);
}
reversall($str);
echo '<br>';

// 循环
function make($str) {
	for($i=1;$i<=strlen($str);$i++) {
		echo substr($str,-$i,1);
	}
}
make($str);
echo '<br>';

// 内置方法
echo strrev($str);
echo '<hr>';

// 截取中英文字符串
echo substr('PHP中文网',0,4);
echo '<br>';

// 防止乱码
echo mb_substr('PHP中文网',0,4);
echo '<br>';

echo mb_strcut('PHP中文网',0,6);
echo '<hr>';

// 替换字符串
$msg = 'hello php';
$value = strtr($msg,'php','css');
echo $value;
echo '<br>';

$value2 = strtr($msg,['php'=>'css']);
echo $value2;