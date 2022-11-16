<?php

// 布尔值
$flag = false;
echo gettype($flag);
echo '<hr>';

if ($flag) {
  echo "true: 可以执行";
} else{
  echo "false: 拒绝执行";
}
echo '<hr>';

// 哪些数据可以转换成布尔?
// 0,'',null,'0',[] 可以转为false;
var_dump((bool)0); 
echo '<hr>';
var_dump((bool)'');
echo '<hr>'; 
var_dump((bool)null); 
echo '<hr>';
var_dump((bool)'0'); 
echo '<hr>';
var_dump((bool)[]); 
