<?php

// 变量函数
function make(){
  return 'php is good';
}
$callback = 'make';
echo $callback();
echo '<br>';

// 截取jpg
$file = 'hecms.jpg';
$action = trim(strrchr($file,'.'),'.');
echo $action;
echo '<br>';

function jpg(){
  return 'jpg function';
}

if (function_exists($action)){
  echo $action($file);
} else {
  echo '格式不正确';
}
