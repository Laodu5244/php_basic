<?php

$start = microtime(true);

$text = "php is best one the world";
function len($str) {
	$num = strlen($str);
	if ($num > 30) {
		echo "text length is to long";
	} else {
		echo $str;
	}
}
len($text);
echo '<hr>';

$end = microtime(true);
$time = $end - $start;
$res = substr($time,0,5);
echo $res;