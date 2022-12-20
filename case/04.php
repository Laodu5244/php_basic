<?php

$str = '0123456789abcdefg';
$len = strlen($str)-1;
$result = '';
for($i=0; $i<6;$i++) {
	(string)$result .= $str[rand(0,$len)];
}
echo '验证码: '.$result;