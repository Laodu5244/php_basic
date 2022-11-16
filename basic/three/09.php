<?php

// 索引数组
$arr = array( 3, 2, 1 );
print_r($arr);
echo '<br>';

// 可以简写 []
$arr2 = [ 'a','b','c' ];
print_r($arr2);
echo '<br>';

// 关联数组
$arr3 = [
  'name'=>'Jack',
  'age'=>18,
  'city'=>'武汉'
];
print_r($arr3);
echo '<br>';
echo $arr3['city'].'<br>';

// 添加,修改数组
$arr4 = ['tom'];
$arr4[] = 'lisa';
$arr4[5] = 'Jack';
$arr4[5] = 'mary';
print_r($arr4);