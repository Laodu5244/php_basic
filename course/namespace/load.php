<?php

namespace App;

class Load {
	public static function index() {
		spl_autoload_register([new self, 'autoload']);
	}

	// 更改路径
	public function autoload($class) {
		$file = str_replace('\\','/',$class) . '.php';
		require $file;
	}
}
Load::index();