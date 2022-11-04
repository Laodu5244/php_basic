<?php

$c = 0;
$d = false;
// 双等于不比较类型,只比较值;
var_dump($c == $d);

// 三等于比较类型,也比较值;
$a = '';
$b = null;
var_dump($a === $b);
echo '<hr>';

var_dump($c !== $d);
var_dump($a != $b);
var_dump($a <= $b);
var_dump($a >= $b);
var_dump($a <> $b); // 不等于
echo '<hr>';

// 逻辑比较
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(true || false); // true
var_dump(false && false); // false
var_dump(!false); // true
echo '<hr>';