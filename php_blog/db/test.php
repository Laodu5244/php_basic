<?php

// echo phpinfo();
$connect = new Mysqli('127.0.0.1','root','sisisi','blog') or die('数据库连接失败');
$res = $connect->query('select * from articles');
$art = $res->fetch_all(MYSQLI_ASSOC);
header('Content-type:application/json');
echo json_encode($art);
