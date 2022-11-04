<?php

$date1 = new DateTime();
$date2 = new DateTime('2020-10-2 12:21:13');

$interval = $date1->diff($date2);
echo $interval->format('相差: '.'%a天');
echo '<br>';

// 增加
$time = new DateInterval('P2DT2H5M');
$date1->add($time);
echo $date1->format('Y-m-d H:i:s');
echo '<br>';

// 减少
$date1->sub($time );
echo $date1->format('Y-m-d H:i:s');