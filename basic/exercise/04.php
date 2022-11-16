<?php

// 数组
$arr = array(3, 2, 1);
print_r($arr);
echo '<br>';
echo '数组长度:' . count($arr) . '<br>';

$length = count($arr);
for ($i = 0; $i < $length; $i++) {
  echo $arr[$i] . '<br>';
}
echo '<hr>';

$user = ['name' => 'jack', 'age' => 18];
print_r($user);
echo '<br>';

foreach ($user as $key => $value) {
  echo "Key=" . $key . ", Value=" . $value . '<br>';
}
echo '<hr>';

$num = [2, 5, 1, 7, 13, 42, 6, 53];
sort($num);
print_r($num);
echo '<br>';

rsort($num);
print_r($num);
echo '<br>';

asort($num);
print_r($num);
echo '<br>';

arsort($num);
print_r($num);
echo '<br>';

krsort($num);
print_r($num);
echo '<br>';

ksort($num);
print_r($num);
echo '<hr>'; 

$sites = [
  [
    'name'=>'jack',
    'age'=>18,
  ],
  [
    'name'=>'Lisa',
    'age'=>14,
  ],
  [
    'name'=>'Tina',
    'age'=>21,
  ],
];

echo json_encode($sites);
