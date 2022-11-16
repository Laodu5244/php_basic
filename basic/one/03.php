<?php

$a = 1;
// 引用传值
$b = &$a;
$b = 3;

echo $a;
echo '<br>';
echo $b;
echo '<br>';

$a = 9;
echo $a;
echo '<br>';
echo $b;


