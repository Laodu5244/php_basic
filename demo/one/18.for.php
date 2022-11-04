<?php

for ($i = 0; $i < 10; $i++){
  echo $i.'<br>';
}
echo '<hr>';

for ($num = 10; $num >0; $num--){
  // continue: 跳过本次循环
  if($num % 2 == 0) continue;
  echo $num.'<br>';
}