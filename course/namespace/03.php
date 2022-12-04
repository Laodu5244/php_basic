<?php

namespace App;

// 提前声明,方便后面使用
use App\Controller\Person;
use App\Controller\Girl;
// 解决命名空间冲突
use App\Girl as Women;

include './controller/Person.php';
include './controller/Girl.php';
include './Girl.php';

// 这里的namespace指的是当前的命名空间
namespace \Controller\Person::make();
echo '<br>';

// 使用提前声明的类
Person::make();
echo '<br>';
Girl::name();
echo '<br>';
Women::name();