<?php

$msg = '全栈开发';
// include: 引入模板,加载错入后面的代码会继续执行
include 'index.html';

// require: 强加载,加载错入后面的代码会中止
require('index.html');
echo '<hr>';

// include_once: 避免重复加载尔报错
include_once 'function.php';
include_once 'show.php';

require_once 'function.php';
require_once 'show.php';