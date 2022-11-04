<?php

$str = '东邪';
$name = '西毒';
$women = '灭绝师太';
$man = '北丐';
$nothing = '';

# 三元表达式
echo $str ? "我是黄老邪" : "我不是东邪";
echo '<br>';

# if else语句
if($name == '东邪'){
  echo "我是黄老邪";
} elseif ($women == '灭绝师太'){
  echo '我是灭绝师太';
} else {
  echo "我不是武林人士";
}
echo '<br>';

# switch语句
switch ($nothing){
  case '东邪':
    echo "我是黄老邪" ;
    break;
  case '西毒':
    echo "我是欧阳锋" ;
    break;
  case '灭绝师太':
    echo '我是灭绝师太';
    break;
  default :
    echo "我不是武林人士";
}
echo '<br>';

# match表达式(php8)
echo match ($man){
  "西毒" => "我是欧阳锋",
  '东邪' => '我是黄老邪',
  '北丐' => '我是九指神丐'
};