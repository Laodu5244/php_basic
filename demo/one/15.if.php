<?php

$age = 18;
// if 语句
if ($age = 18) {
  echo "flag is true";
} else {
  echo "flag is false";
}
echo '<br>';

// 第二种写法
if ($age > 20) :
  echo "flag is true";
else : 
  echo "flag is false";
endif;
echo '<br>';

if ($age < 12) {
  echo '少年';
} elseif ($age >= 12 && $age < 18){
  echo '青年';
} elseif ($age >= 18){
  echo '成年';
}
