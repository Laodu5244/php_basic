<body style="background: #A0522D;"></body>
<?php

//设置时区
date_default_timezone_set('PRC');
// 获取时区
echo date_default_timezone_get();
echo '<br>';

// 获取当前时间
echo date('y-m-d H:i:s');
echo '<hr>';

// 时间戳(秒)
echo time();
echo '<br>';

// 微秒
echo microtime(true);
echo '<hr>';

// 计时器
function runtime($start=null, $end=null){
  static $cache = [];
  if(is_null($start)){
    return $cache;
  } elseif(is_null($end)){
    return $cache[$start] = microtime(true);
  } else {
    $end = $cache[$end]??microtime(true);
    return round($end-$cache[$start],2);
  }
}

// for循环执行两千万次
runtime('for');
for($i=0;$i<20000000;$i++){
  $i++;
}
runtime('forEnd');
echo 'for循环两千万次时间: '.runtime('for','forEnd');
echo '<br>';

// while循环执行两千万次
runtime('while');
$n = 0;
while($n<20000000){
  $n++;
}
runtime('whileEnd');
echo 'while循环两千万次时间: '.runtime('while','whileEnd');
echo '<br>';
echo 'for+while总执行时间: '.runtime('for','whileEnd');
echo '<hr>';

// 自定义时间
echo date('Y年m月d日 H时i分s秒');
echo '<br>';

// 一小时之前
echo date('Y/m/d/ H:i:s',time()-3600);
echo '<br>';

// 一天之前
echo date('Y/m/d/ H:i:s',time()-3600*24);
echo '<hr>';

// 获取当前时间和时间戳(数组)
print_r(getdate());
echo '<br>';
print_r(getdate()['year']);
echo '<hr>';

// 日期转换时间戳
$oldTime = strtotime('2006-2-12 07:23:12');
echo $oldTime;
echo '<br>';

// 时间戳转换日期
echo date('Y-m-d H:i:s',$oldTime);
echo '<br>';

// 当前时间戳
echo strtotime('NOW');
echo '<hr>';

// 动态修改时间
$newTime = strtotime('+1 year +55 day');
echo $newTime;
echo '<br>';
echo date('Y-m-d H:i:s',$newTime);
echo '<br>';

// 下周五
$nextFriday = strtotime('next friday');
echo date('Y-m-d H:i:s',$nextFriday);
echo '<hr>';

// DateTime内置对象
$dateTime = new DateTime();
echo $dateTime->format('Y-m-d H:i:s');
echo '<br>';

// Datetime也可以接收时间参数
$dateTime = new DateTime('2023-01-19 00:27:30');
echo $dateTime->format('Y-m-d H:i:s');
echo '<br>';

// DateTime显示时间戳
echo $dateTime->format('U');
echo '<br>';

// DateTime设置时间
$dateTime->setDate(2019,2,12);
$dateTime->setTime(12,02,25);
echo $dateTime->format('Y-m-d H:i:s');
echo '<hr>';

// 静态方法 createFromFormat: 根据格式创建日期
$timer = '2030-01-01 00:00:00';
$dt = DateTime::createFromFormat('Y-m-d H:i:s',$timer);
echo $dt->format('Y-m-d H:i:s');
echo '<br>';

// 时间差值
$dateTime1 = new DateTime();
$dateTime2 = new DateTime($timer);
$interval = $dateTime1->diff($dateTime2);
$format = "距离2030年还有: <span style='color:blue;'>%a天</span>";
echo $interval->format($format);
echo '<br>';

// 增加两天两小时5分钟
$somotimes = new DateInterval('P2DT2H5M');
$dateTime1->add($somotimes);
echo $dateTime1->format('Y-m-d H:i:s');
echo '<br>';

// 减少
$dateTime1->sub($somotimes);
echo $dateTime1->format('Y-m-d H:i:s');