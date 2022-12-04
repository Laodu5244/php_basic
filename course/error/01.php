<?php

/**
 * 错误分类:
 * 1.语法错误 (致命,所有代码都不执行)
 * 2.运行错误 (不致命,之后的代码不执行)
 * 3.逻辑错误 (死循环等, 需要程序员自行判断)
 */

// @: 忽略错误(不推荐)
// @require '123';

// 函数忽略错误(不推荐)
// error_reporting(0);
// error_reporting(~E_WARNING & ~E_COMPILE_ERROR);
// require a;

// 自定义错误(推荐)
use Core\Error;
include './Error.php';

$err = new Error();
$err->error();

// 通知错误
echo $a;
// 运行错误
require a;