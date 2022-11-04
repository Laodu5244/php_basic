<?php

$num = 0;

while($num<10){
  echo $num++.'<br>';
}
echo '<hr>';



// do while会先执行一次
$number = 10;

do {
  if($number == 5){
    break; //中止循环
  }
  echo $number--.'<br>';
} while ($number>0);
echo '<hr>';

// break跳出二级循环
$count = 0;

while ($count < 100):
  $count++;
  switch($count){
    case $count % 4 == 0;
      echo $count.'<br>';
      break;
    case $count % 15 == 0;
      echo $count.'<br>';
      break 2;
  }
endwhile;
