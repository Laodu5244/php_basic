<?php

// 运算符
echo '<br>';
$x = 10;
$y = 5;
echo ($x + $y) .'<br>';
echo ($x - $y) .'<br>';
echo ($x * $y) .'<br>';
echo ($x / $y) .'<br>';
echo ($x % $y) .'<br>';
var_dump(intdiv(10,3));
echo '<hr>';

$num = 20;
$res = 10;

$res += $num;
echo $res .'<br>';
$res -= $num;
echo $res .'<br>';
$res *= $num;
echo $res .'<br>';
$res /= $num;
echo $res .'<br>';
echo '<hr>';

echo ++$res.'<br>';
echo --$res.'<br>';
echo $res++.'<br>';
echo $res--.'<br>';
echo '<hr>';

var_dump($x == $y);
echo '<br>';
var_dump($x === $y);
echo '<br>';
var_dump($x != $y);
echo '<br>';
var_dump($x !== $y);
echo '<br>';
var_dump($x <> $y);
echo '<hr>';

$bool = true;
$null = null;

var_dump($bool and $null);
echo '<br>';
var_dump($bool or $null);
echo '<br>';
var_dump($bool xor $null); # 如果有且仅有一个为true，则返回true
echo '<hr>';

var_dump($bool && $null);
echo '<br>';
var_dump($bool || $null);
echo '<br>';
(!$bool); # 如果不为true，则返回true
echo '<hr>';

$name = 'Lisa';
var_dump($name == 'Lisa' ? true : false);
echo '<br>';
var_dump($name=='Tina' ?: false);
echo '<br>';
var_dump($name=='Lisa' ?? false);
echo '<hr>';

var_dump(1 <=> 1);
echo '<br>';
var_dump(1 <=> 2);
echo '<br>';
var_dump(2 <=> 1);
echo '<hr>';