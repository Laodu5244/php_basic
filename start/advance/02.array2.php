<?php

// 二维数组
$arr = [
  [
    'name'=> 'Lisa',
    'age'=> 18,
  ],
  [
    'name'=> 'Jack',
    'age'=> 24,
  ],
  [
    'name'=> 'Tina',
    'age'=> 21,
  ],
];
print_r($arr);
echo '<hr>';

// 遍历二维数组
foreach ($arr as $keys=>$items){
  foreach ($items as $keys=>$i){
    echo $i . ' ';
  }
  echo '<br>';
}