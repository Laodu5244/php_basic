<?php

# 当前时间
echo date('Y-m-d H:i:s');
echo '<br>';

# 时间戳
echo time();
echo '<br>';

# 微秒(百万分只一秒)
echo microtime(true);
echo '<br>';

// 计时器
function runtime($start = null, $end = null) {
  static $cache = [];
  if (is_null($start)) { // 如果没有开始
    return $cache;
  } elseif (is_null($end)){
    return $cache[$start] = microtime(true);
  } else {
    $end = $cache[$end] ?? microtime(true);
    return $end - $cache[$start];
  }
}

runtime('for');
for ($i=0;$i<2000000;$i++){
  $i++;
}
runtime('forend');
echo 'for循环执行时间: '.runtime('for','forEnd');
echo '<br>';

$n = 0;
runtime('while');
while($n<2000000){
  $n++;
}
runtime('whileEnd');
echo 'while循环执行时间: '.runtime('while','whileEnd');