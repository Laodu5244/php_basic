<?php

// 递归函数
function recursive($num){
  if ($num ==1) {
    return $num;
  }
  return $num*($num-1);
}

echo recursive(10);
