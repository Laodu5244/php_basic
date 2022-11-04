<?php

// 变量作用域
$siteName = 'www.php.cn';
function getSiteName(){
  $siteName = 'php中文网';
  // 通过$GLOBALS拿到全局变量
  return $siteName.$GLOBALS['siteName'];
}
echo $siteName;
echo '<hr>';
echo getSiteName();
echo '<hr>';

// 全局变量数组
print_r($GLOBALS['siteName']);
echo '<hr>';

function sum() {
  // static设置静态变量
  static $total = 0;
  return $total += 10;
}
echo sum(),'<br>',sum(),'<br>',sum();

// $GLOBALS和$_SERVER是内置全局数组
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
