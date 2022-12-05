<?php

include './Code.php';

// 错误捕获
try {
	$code = new Code();
	$code->make(10);
} catch (Exception $error) {
	// 输出异常
	echo $error->getMessage();
}
echo '<hr>';

// 继承内置的异常
class Upload extends Exception {}
class Login extends Exception {}

try {
	// 直接抛出异常
	throw new Upload();
	throw new Login();
} catch (Upload $error){
	echo 'error: you are not upload';
	echo '<br>';
} catch(Login $error){
	echo 'error: you are not login';
	echo '<br>';
} finally { // finally: 必定执行的代码
	echo 'finally code is always execute';
}