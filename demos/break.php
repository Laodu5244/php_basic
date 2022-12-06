<?php

// break
echo 'break: ';
for($i=1;$i<10;$i++){
  if($i == 5) break;
  else echo $i; 
}
echo '<hr>';

// continue
echo 'continue: ';
for($i=1;$i<10;$i++){
  if($i == 5) continue;
  else echo $i; 
}
echo '<hr>';

// return(停止程序)
echo 'return: ';
for($i=1;$i<10;$i++){
  if($i == 5) return;
  else echo $i; 
}
echo '<hr>';

// exit(停止程序)
echo 'exit: ';
for($j=1;$j<10;$j++){
  if($j == 5) exit();
  else echo $j; 
}