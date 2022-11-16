<?php

$arr1 = [
  'host'=>'localhost',
  'port'=>3306,
  'user'=>'root',
];
$arr2 = [
  'url'=>'127.0.0.1',
  'password'=>'admin',
];

// 合并数组
$arr = array_merge($arr1,$arr2);
echo json_encode($arr);
