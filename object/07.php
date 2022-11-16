<?php

// namespace: 命名空间
namespace one;
function  php(){};
class Person {};
const Name = 'Lisa';
$age = 18;

namespace one\two;
// 给路径命名
use one\two as first;

function php() {};
class Person {};
const Name = 'Tina';
$age = 24;

namespace three;
// 不同的命名空间只能访问变量,常量,函数和类都不能访问
echo $age;
