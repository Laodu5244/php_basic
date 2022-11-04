<?php

// 向上取整
echo ceil(10.2);
echo '<br>';

// 向下取整
echo floor(10.2);
echo '<br>';

// 四舍五入
echo round(10.8);
echo '<br>';

// 选出最大值
echo max(1,33,65,9);
echo '<br>';

// 选出最小值
echo min(4,33,65,9);
echo '<br>';

// 随机数
echo mt_rand(1,999);
echo '<br>';


// 验证码
function code(int $len = 4):string {
  $str = '123456789abcdefghijklmn';
  $code = '';
  for($i=0;$i<$len;$i++){
    $index = mt_rand(0,strlen($str)-1);
    $code.= $str[$index];
  }
  return $code;
}
echo '验证码: '."<span style='background:skyblue'>";
echo code(6);
echo "</span>";
echo '<br>';

// 利用最小值和最大值让数值不能小于1，也不能大于100
$total = 100;
echo min($total,max(1,$_GET['page']??1));




