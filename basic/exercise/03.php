<?php

// 条件语句
$time = date('H');
if ($time<'10') {
  echo "Have a good morning!";
} elseif ($time<'20') {
  echo "Have a good day!";
} else {
  echo "have a good night!";
}
echo '<br>';

$color = 'red';
switch($color) {
  case 'blue':
    echo '你喜欢蓝色';
    break;
  case 'yellow':
    echo '你喜欢黄色';
    break;
  case 'red':
    echo '你喜欢红色';
    break;
  case 'green':
    echo '你喜欢绿色';
    break;
  default: 
    echo '你到底喜欢什么颜色呢?';
}