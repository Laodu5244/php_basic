<?php

// while循环
echo '<hr>';
$i = 10;
while($i>0){
  echo $i . ' ';
  $i--;
}
echo '<hr>';

// do while循环
$i = 10;
do{
  echo $i . ' ';
  $i++;
}while($i<20);
echo '<hr>';

// for循环
for($i=0; $i<10; $i++){
  echo $i . ' ';
}
echo '<hr>';

// 九九乘法表
for($i=1;$i<=9;$i++){
  for($j=1;$j<=$i;$j++){
    echo "{$j}X{$i}=".($j*$i)." ";
  }
  echo '<br>';
}