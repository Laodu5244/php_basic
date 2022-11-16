<?php

declare(strict_types = 1);

// 返回值的约束 
// function sum(): string {
//   return 'hello php';
// }
// echo sum().'<br';

// ?代表可以为空
function sum2(): ?string {
  return 123;
}
try{
  echo sum2();
}catch(\Throwable $th){
  echo '失败了';
  echo $th->getMessage();
}
