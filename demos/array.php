<?php

// array to string
$array = ['name'=>'Lisa','age'=>18];
var_dump($array);
echo '<hr>';

// implode
$str = implode(' ', $array);
var_dump($str);
echo '<br>';

// foreach
$string = '';
foreach ($array as $item) {
	$string.=$item.' ';
}
var_dump($string);
echo '<hr>';

// string to array
$arr = explode(' ', $str);
var_dump($arr);