<?php

// pdo对象连接数据库
header('Content-type:text/html;charset=utf8');
$pdo = new PDO('mysql:host=localhost;dbname=basic','root','sisisi') or die('数据库连接失败');
$pdo->query('SET NAMES utf8');