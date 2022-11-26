<?php

echo '<hr>';

echo ceil(8.2); // 向上取整
echo '<br>';
echo floor(8.8); // 向下取整
echo '<br>';
echo round(8.2); // 四舍五入
echo '<hr>';

echo max(1,3,5); // 找出最大值
echo '<br>';
echo min(3,5,7); // 找出最小值
echo '<br>';
echo mt_rand(1,999); // 随机数
echo '<hr>';

// 生成验证码
function code(int $length = 4): string {
	$str = '1234567890abcdefghijklmn';
	$code = '';
	for($i=0; $i<$length; $i++){
		$index = mt_rand(0,strlen($str)-1);
		$code .= strtoupper($str[$index]);
	}
	return $code;
}
echo code(6);
echo '<br>';

// 分页器 (1-100之间的数值)
$num = min(100,max(1,$_GET['page']??1));
echo '第'.$num.'页';
echo '<hr>';