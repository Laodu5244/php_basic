<?php

// 常量,不可更改
define('NAME','jack');
echo NAME.'<br>';

// const也可以定义常量(酷似js)
const URL = 'localhost';
echo URL.'<br>';

// 常量不受作用域限制
function show() {
  echo URL.'<br>';
}
show();
// 检查一个常量是否存在
var_dump(defined('NAME'));
echo '<br>';

// 系统常量
echo PHP_VERSION.'<br>';
echo PHP_OS.'<br>';
