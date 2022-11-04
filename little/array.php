<?php

// 数组转字符串 
$arr = ['php','python','java'];

# implode方法
$str = implode(' ',$arr);
var_dump($str);
echo '<br>';

# foreach
$string = '';
foreach ($arr as $item) {
  $string .= ' '.$item;
}
var_dump($string);
