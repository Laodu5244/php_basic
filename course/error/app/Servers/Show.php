<?php

namespace App\Servers;

use App\Exceptions\View;

class Show {
	public static function make($file, $vars=[]) {
		$file = 'Views/' . $file . '.blade.php';
		if (!is_file($file)) {
			throw new View("模板文件{$file}不存在");
		} else {
			include $file;
		}
	}
}
