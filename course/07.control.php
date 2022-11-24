<?php

// 流程控制
$status = false;
if ($status) {
  echo '真';
} else {
  echo '假';
}
echo '<hr>';

// if另一种写法
$sex = '';
if ($sex == '男'): echo '你是男的';
elseif ($sex == '女'): echo '你是女的';
else: echo '人妖'; endif;
echo '<hr>';

// 简写
$age = 21;
if ($age<15) echo '少年';
elseif ($age<25) echo '青年';
elseif ($age<35) echo '成年年';
else echo '中年';
echo '<hr>';

// switch语句
const color = 'red';
switch(color) {
	case 'blue':
		echo '你喜欢蓝色'; 
		break;
	case 'green':
		echo '你喜欢绿色'; 
		break;
	case 'red':
		echo '你喜欢红色'; 
		break;
	case 'yellow':
		echo '你喜欢黄色'; 
		break;
	default: 
		echo '你喜欢其他颜色';
}
echo '<hr>';

// while 循环
$num = 10;
while($num>0) {
	echo $num--;
}
echo '<hr>';

// do while 循环
do{
	echo $num++;
}while($num<10);
echo '<hr>';

// for 循环
for($i=0; $i<10; $i++ ){
	# continue: 跳过本次循环
	if($i % 3 == 0) continue;
	# break: 终止整个循环
	if($i == 7) break; 
	echo $i;
}