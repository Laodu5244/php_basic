<?php

$num = 0;
while($num<5) {
  echo $num.'<br>';
  $num++;
}
echo '<hr>';

do{
  echo $num.'<br>';
  $num++;
} while($num<10);
echo '<hr>';

for($num;$num>0;$num--){
  if($num == 7) {
    echo '执行到7了'.'<br>';
  }
  if($num ==5){
    echo '5被跳过了'.'<br>';
    continue; 
  } 
  if($num ==3){
    echo '3被break了,循环已经停止'.'<br>';
    break; 
  } 
  echo $num.'<br>';
}