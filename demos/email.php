<?php

// 验证邮箱格式
function validateEmail($email) {
	$preg = "/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i";
	return preg_match($preg, $email);
}

$res = validateEmail('123@');
var_dump($res);

$res = validateEmail('123@163.com');
var_dump($res);