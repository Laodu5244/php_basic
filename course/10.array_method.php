<?php

$users = ['张三', '李四', '胡大'];
print_r($users);
echo '<br>';

# 末尾添加一项
array_push($users, '王五');
print_r($users);
echo '<br>';

# 末尾删除一项
array_pop($users);
print_r($users);
echo '<br>';

# 首位添加一项
array_unshift($users, '赵六');
print_r($users);
echo '<br>';

# 首位删除一项
array_shift($users);
print_r($users);
echo '<hr>';

// 获取数组长度
echo count($users);
echo '<br>';

// 检测下标是否存在
if (array_key_exists(1, $users)): echo '下标存在';
else:echo '下标不存在';endif;
echo '<br>';

// 检测值是否存在
if (in_array('张三', $users)): echo '值存在';
else:echo '值不存在';endif;
echo '<br>';

// 获取数组所有的key
print_r(array_keys($users));
echo '<br>';

// 获取数组所有的values
print_r(array_values($users));
echo '<hr>';

$heros = [
  ['name' => '东邪', 'age' => 42],
  ['name' => '西毒', 'age' => 41],
  ['name' => '北丐', 'age' => 46],
];
// 过滤
$filter_heros = array_filter($heros, function ($hero) {
  return $hero['age'] >= 45;
});
print_r($filter_heros);
echo '<br>';

// map
$map_heros = array_map(function ($hero) {
  unset($hero['name']);
  return implode('-', array_values($hero));
}, $heros);
print_r($map_heros);
echo '<hr>';

// 数组合并
$arr = ['a', 'b', 'c'];
$_arr = (array_merge($arr, ['d', 'e']));
print_r($_arr);
echo '<br>';

// keys转大写
$girl = ['name' => 'Lisa', 'age' => 18];
$_girl = array_change_key_case($girl, CASE_UPPER);
print_r($_girl);
echo '<br>';

// keys转小写
$_girl = array_change_key_case($girl, CASE_LOWER);
print_r($_girl);
echo '<hr>';

// 递归改变keys
function hd_array_change_keys($data, $type) {
  foreach ($data as $key => $value) {
    $action = $type == CASE_UPPER ? 'strtoupper' : 'strtolower';
		unset($data[$key]);
		$data[$action($key)] = is_array($value)?hd_array_change_keys($value,$type):$value;
  }
	return $data;
}
print_r(hd_array_change_keys($heros,CASE_UPPER));
echo '<hr>';

// 递归改变values
$person = [
  ['name'=>'Lisa','hobby'=>'music'],
  ['name'=>'Tina','hobby'=>'book']
];
function hd_array_change_values($data,$case) {
  $action = $case == CASE_UPPER?'strtoupper':'strtolower';
  foreach($data as $key=>$value){
    $data[$key] = is_array($value)?hd_array_change_values($value,$case):$action($value);
  }
  return $data;
}
print_r(hd_array_change_values($person,CASE_UPPER));
echo '<hr>';

// array_walk_recursive方法
array_walk_recursive($person,function(&$value,$key){
  $value = strtoupper($value);
});
print_r($person);
echo '<hr>';

// 封装array_walk_recursive方法
function my_recursive($data,$type=CASE_UPPER) {
  array_walk_recursive($data,function(&$value,$key,$type){
    $action = $type == CASE_UPPER?'strtoupper':'strtolower';
    $value = $action($value);
  },$type);
  return $data;
}
print_r(my_recursive($person,CASE_LOWER));
echo '<hr>';