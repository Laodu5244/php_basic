<?php

// 函数嵌套
function outer() {
	echo "outer function";
	// 判断是否定义了inner函数
	if(!function_exists('inner')){
		function inner() {
			echo "inner function";
		}
	}
}

outer();
echo '<br>';
outer();
echo '<br>';
inner();