<?php

namespace App;

// 自动加载
include './load.php';
use App\Person;
use App\Girl;

Person::make();
echo '<br>';
Girl::name();