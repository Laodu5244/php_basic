<?php

// set timezone
date_default_timezone_set('Asia/Shanghai');

// get time
$time =  time();
var_dump($time);
echo '<br>';

// milllisecond
$milllisecond = microtime(true);
var_dump($milllisecond);
echo '<hr>';

// get date
echo date('Y-m-d H:i:s');
echo '<br>';

// last day
echo date('Y-m-d H:i:s',strtotime('-1 day'));
echo '<hr>';

// 倒计时
$time = time();
$nextYear = strtotime('2023-1-1');

$i = ceil(($nextYear-$time)/3600);
$day = ceil(($nextYear-$time)/86400);
echo '距离2023年还有: '.$i.'小时';
echo '<br>';
echo '距离2023年还有: '.$day.'天';