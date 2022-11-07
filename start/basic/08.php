<?php

// 分支结构
$num = 10;
if ($num == 10) {
  echo 'num==10';
} else {
  echo 'num!=10';
}
echo '<hr>';

$time = 2;
switch ($time){
  case $time >= 0 && $time < 8:
    echo '请不要熬夜';
    break;
  case $time >= 8 && $time < 12:
    echo '早上好';
    break; 
  case $time >= 12 && $time < 18:
    echo '下午好';
    break; 
  case $time >= 18 && $time < 24:
    echo '晚上好';
    break;
  default: 
    echo '请不要熬夜';
}
