<?php

// $tel: 参数
function mobile($tel){
  return substr($tel,0,-4).'****';
}
echo mobile('13838381438').'<br>';
echo mobile('15050505050').'<br>';

// &修饰符是引用传递,,一个变都会变
function show(&$num){
  $num++ ;
  echo $num.'<br>';
}
$num = 3;
show($num);
echo $num.'<br>';

// 参数数量不确定可以用拓展运算符
function sum(...$vars){
  // array_sum: 汇总函数,把数组的每一项相加
  return array_sum($vars);
}
echo sum(1,3,4,5,2,9).'<br>';

# 此案例可以多练几次
// 参数可以是多个,也可以给默认值
function mobile2($tel,$count=4,$fix='*'){
  return substr($tel,0,-1*$count).str_repeat($fix,$count);
}
echo mobile2('13838381438',2).'<br>';
echo mobile2('15050505050',8,'#').'<br>';