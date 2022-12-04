<?php

namespace Controller;

// const定义的常量会受命名空间影响
const Name = 'Lisa';
// define定义的常量不受命名空间影响
define('Age',18);

class User {
	public static function make() {
		return 'This is a static namespace method';
	}
}