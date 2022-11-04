<?php

$name = '灭绝师太';
if(isset($name)){
  echo $name;
}else {
  echo '无名之辈';
}
echo '<br>';

if(empty($name)){
  echo $name;
}else {
  echo '无名之辈';
}
echo '<br>';

// 字符串分割成数组
$message = '灭绝师太,张无忌,周芷若,敏敏特穆尔';
print_r(explode(',',$message));
echo '<br>';

// 将字符串MD5加密
echo md5($name);
echo '<br>';

$arr = ['东邪','西毒','西门吹雪'];
// 获取数组的有几个元素
echo count($arr);
echo '<br>';

// 数组中是否存在指定的值 1为true 0为false
echo in_array('西门吹雪',$arr);
echo '<br>';

// 数组合并为字符串
echo implode(',',$arr);
echo '<br>';