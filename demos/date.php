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