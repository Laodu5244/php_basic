<?php

// 数组
$arr1 = array('a'=>'东邪','西毒','西门吹雪'); 
var_dump($arr1);
echo '<br>';

$arr2 = ['Lisa','Jack','Tina'];
echo $arr2[2].'<br>';
print_r($arr2);
echo '<hr>';

// 多维数组
$arr3 = [
  [
    'Lisa',
    'Jack',
    'Tina'
  ],
  [
    '东邪',
    '西毒',
    '西门吹雪',
    [
      '永强',
      '赵四',
      "刘能",
    ]
  ],
];
print_r($arr3);
echo '<br>';

// 遍历数据
$arr2 = ['Lisa','Jack','Tina'];
foreach($arr2 as $key => $item){
  // 输出每一个key和value
  echo $key.'---'.$item.'<br>';
}
echo '<hr>';

$arr5 = [
  [
    'Lisa',
    'Jack',
    'Tina'
  ],
  [
    '东邪',
    '西毒',
    '西门吹雪',
  ],
];
// 遍历多维数组
foreach($arr5 as $key => $item){
  foreach($item as $k => $i){
    echo $k.'---'.$i.'<br>';
  }
}

?>