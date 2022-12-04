<?php

// 入口文件, 引入配置路由方法
include_once '../controller/methods.php';

// 首页
if(url('/')) require '../views/index.php';
// 关于
if (url('/about')) require '../views/about.php';
// 文章
if (url('/article')) require '../views/article.php';