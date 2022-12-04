<?php

include './controller/User.php';
include './controller/helper.php';

// 调用命名空间中的类
echo Controller\User::make();
echo '<br>';

// 调用命名空间中的函数
echo Controller\show();