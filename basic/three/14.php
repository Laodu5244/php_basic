<?php

# 数组函数
$users = [
  ['name'=>'jack','age'=>15],
  ['name'=>'lisa','age'=>18],
  ['name'=>'tom','age'=>22],
];

// 过滤
$filterUser = array_filter($users,function($user){
  // 获取年龄小于20的人
  return $user['age'] < 20;
});
echo json_encode($filterUser );
echo '<br>';

// map方法
$map_user = array_map(function($user){
  // 去掉列表中每一项的年龄,,添加class
  unset($user['age']);
  $user['class'] = 'php';
  return $user;
},$users);
echo json_encode($map_user);
echo '<br>';

// 取姓名列表做成新数组
$names = array_map(function($user){
  return $user['name'];
},$users);
print_r($names);
echo '<br>';

// 拿到values
$values = array_map(function($user){
  return implode('-',array_values($user));
},$users);
print_r($values);
