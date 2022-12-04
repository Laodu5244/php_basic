<?php

// 入口文件: 配置路由
$url = $_SERVER['REQUEST_URI'];

// 首页
if($url == '/'){
	require '../views/index.php';
} 

// 关于
if ($url =='/about'){
	require '../views/about.php';
} 

// 文章
if ($url == '/article') {
	require '../views/article.php';
}