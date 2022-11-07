<?php

// 数组
$array = array('name'=>'Lisa','age'=>24);
print_r($array);
echo '<br>';
echo $array['name'];
echo '<hr>';

// 数组简写形式
$arr = ['a','b','c'];
print_r($arr);
echo '<hr>';

// for遍历数组
$arr2 = [4,3,2,1];
// count($arr2): 计算数组的长度
for($i=0;$i<count($arr2);$i++){
  echo $arr2[$i] . '<br>';
}
echo '<hr>';

// foreach遍历数组
foreach($arr as $item){
  echo $item . '<br>';
}
// foreach如果需要拿到key
foreach($arr as $keys=>$item){
  echo $keys .'--' . $item . '<br>';
}
