<?php

use App\Servers\Show;
include './bootstrap.php';

// // 使用系统内置异常
// throw new Exception('抛出一个异常');

// throw new \App\Exceptions\Validate('12345');
// throw new \App\Exceptions\View('12345');

// 使用自定义异常处理
Show::make('index');