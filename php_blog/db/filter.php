<?php

// 筛选函数
function filter($array, $bool) {
	$result = [];
	foreach ($array as $item) {
		if ($item['featured'] == $bool) {
			$result[] = $item;
		}
	}
	return $result;
}