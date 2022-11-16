<?php

// 定义一个函数
function person () {
  return 'php is good'; 
}

var_dump(person());
echo '<br>';

// 引入
include 'fun1.php';
include 'fun2.php';

Fun1\show();
Fun2\show();
echo '<br>';