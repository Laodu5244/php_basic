<?php

// empty: 判断是否为空(推荐)
$name = "Lisa";
$msg = NULL;
$str = '';
$num = 0;
var_dump(empty($name));
var_dump(empty($msg));
var_dump(empty($str));
var_dump(empty($num));
echo '<br>';

// isset: 判断是否有值
var_dump(isset($name));
var_dump(isset($msg));
var_dump(isset($str));
var_dump(isset($num));

phpinfo();