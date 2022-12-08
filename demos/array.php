<?php

// array to string
$array = ['name' => 'Lisa', 'age' => 18];
var_dump($array);
echo '<hr>';

// implode
$str = implode(' ', $array);
var_dump($str);

// foreach
$string = '';
foreach ($array as $item) {
	$string .= $item . ' ';
}
var_dump($string);
echo '<hr>';

// string to array
$arr = explode(' ', $str);
var_dump($arr);
echo '<hr>';

// 数组去空(0也会去掉)
$nums = [3, 2, '', 5, 0];
function del($value) {
	return (trim($value));
}
var_dump(array_filter($nums, 'del'));

// 正则方法
$ptn = "/\S+/i";
var_dump(preg_grep($ptn, $nums));
echo '<hr>';

// 数组去重
$arr = ['html','html','php'];
var_dump(array_unique($arr));
// 去重并调换键值对
var_dump(array_flip($arr));
echo '<hr>';

// 获取最后一个元素
$end = end($arr);
foreach($arr as $k=>$v){
	if($v==$end) echo $k.'=>'.$end;
}