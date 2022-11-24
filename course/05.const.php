<?php

// 常量(定义后不能修改)
define('Name', 'Lisa');
const Age = 18;
echo Name . '-' . Age;
echo '<br>';

// 数组常量
const Arr = [3,2,1];
print_r(Arr);
echo '<br>';

// 常量不受作用域限制
function show() {
	echo Name;
}
show();
echo '<br>';

// 检测是否有常量
var_dump(defined('arr'));
echo '<hr>';

/* php内置常量 */

// 检测php版本
echo PHP_VERSION;
echo '<br>';

// 检测当前操作系统
echo PHP_OS;
echo '<hr>';

class Demo {
	// 当前类名
	public function show() {
		echo __CLASS__;
	}

	// 当前方法
	public function method() {
		echo __METHOD__;
	}
}

(new Demo)->show();
echo '<br>';
(new Demo)->method();
echo '<hr>';

// get_defined_constants: 获取所有常量
print_r(get_defined_constants(true)['user']);