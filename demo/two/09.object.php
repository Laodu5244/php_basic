<?php
$obj = new StdClass();
$obj->name = 'phper';
$obj->server = function() {
  return 'I like php';
};

print $obj->name;
print '<hr>';
// 调用对象里的方法
print call_user_func($obj->server);
echo '<hr>';

// 数组转成对象
print_r((object)[10,20,'php']);
echo '<hr>';

// 字符串转成对象
print_r((object)'php中文网');
print '<hr>';