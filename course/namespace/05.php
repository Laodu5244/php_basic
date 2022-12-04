<?php

namespace App;

// 引入composer的自动加载方法
include './vendor/autoload.php';
use App\Person;
use App\Girl;

Person::make();
echo '<br>';
Girl::name();
