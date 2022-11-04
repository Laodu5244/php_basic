<?php

// 三元表达式
echo true ? "真" : "假";
echo '<br>';
echo false ? "真" : "假";
echo '<br>';

$name = 'lisa';
echo $name  ?? "假";

// 如果可能会报错,可以用@()修饰一下,屏蔽掉错误
@(10/0);