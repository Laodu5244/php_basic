<?php

echo date('y-m-d H:i:s').'<br>';

// 详细时间(数组格式)
print_r(getdate());

// 日期变成时间戳
strtotime(date('y-m-d H:i:s'));
echo '<br>';

// 时间指向下一个星期五
echo date('y-m-d H:i:s',strtotime('next friday'));
echo '<br>';

// dateTime类
$dateTime = new dateTime();
print_r($dateTime);
echo '<br>';
echo $dateTime->date.'---'.$dateTime->timezone;
echo '<br>';
echo $dateTime->format('y-m-d H:i:s');
echo '<br>';

DateTime::createFromFormat('y-m-d','2022-2-2');
echo $dateTime->format('y-m-d');
?>
