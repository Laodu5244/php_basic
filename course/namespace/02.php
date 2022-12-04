<?php

namespace App;
include './controller/User.php';

class User {
	public static function index() {
		echo __METHOD__; # 打印当前方法
	}
}

User::index();
echo '<br>';

// 从根路径查找(绝对路径)
echo \Controller\User::make();
echo '<br>';

// 常量
echo \Controller\Name;
echo Age;