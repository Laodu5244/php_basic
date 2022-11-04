<?php

// 数组(键值对的集合)
$arr = [
  'a' => 10,
  'b' => 20,
  'c' => 30,
];

print_r($arr);
echo '<hr>';

// 如果键是0,1,2 ,可以省略
$a = array('qqq','www','eee');
print_r($a);
echo '<hr>';

// 1,1.7,true都会转化成1
$array = [
  1=>3,
  1.7=>2,
  true=>5,
  0.3=>'hello'
];
print_r($array);
echo '<hr>';

// 数组可以包含数组和对象
$obj = new StdClass();
$obj->name = 'lisa';
$arr_man = [
  'name' => 'Jack',
  'age' => 28,
  'language' => ['html','css','js','php'],
  'friend' => $obj
];
var_dump($arr_man);
echo '<hr>';
print_r($arr_man['friend']->name);
echo '<hr>';

// 添加和修改
$arr2 = [
  'id'=>10,
  'name'=>'mary',
  'age'=>18
];
$arr2[] = 'newItem';
print_r($arr2);
echo '<hr>';
$arr2['name'] = 'lisa';
print_r($arr2);
echo '<hr>';

// 删除单个
unset($arr2[0]);
print_r($arr2);
echo '<hr>';

// 清空数组
foreach($arr2 as $key => $value){
  unset($arr2[$key]);
}
print_r($arr2);

