<?php

// 配置路由
function url($uri){
	return $_SERVER['REQUEST_URI'] == $uri;
}

// 筛选数组
function filter($array, $bool) {
	$result = [];
	foreach ($array as $item) {
		if ($item['featured'] == $bool) {
			$result[] = $item;
		}
	}
	return $result;
}