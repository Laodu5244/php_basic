<?php

session_start();
include "./vendor/autoload.php";

// 异常类
class Boot {
	public function init() {
		set_exception_handler([$this, 'exception']);
	}

	public function exception($err){
		if (method_exists($err,'render')){
			$err->render($err);
		} else {
			die($err);
		}
	}
}

$boot = new Boot();
$boot->init();