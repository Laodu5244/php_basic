<?php

// 类型约束
declare(strict_types = 1);

function fun(int $num) {
  return $num;
}
// 传参必须是数值
// echo fun(123).'<br';

// 捕获错误
try{
  echo fun('123');
}catch(\Throwable $th){
  echo $th->getMessage();
}

