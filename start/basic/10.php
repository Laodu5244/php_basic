<?php

// 循环控制符
echo '<hr>';
for ($i=0;$i<10;$i++){
  echo $i;
  if($i==4){
    echo('$i=4');
    continue; # 跳过本次循环
  }
  if($i==7){
    break; # 终止整个循环
  }
}
echo '<hr>';

for($i=1;$i<=9;$i++){
  for($j=1;$j<=$i;$j++){
    echo "{$j}X{$i}=".$j*$i.' ';
  }
  echo '<br>';
}
