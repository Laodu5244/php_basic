<?php

// 连接数据库
$pdo = new PDO('mysql:host=localhost;dbname=tp', 'root', 'sisisi');

// 防止乱码
$pdo->query('SET NAMES utf8');
$stmt = $pdo->prepare('select * from heros');

// 执行这个sql语句
$stmt->execute();
$arr = $stmt->fetchAll();
echo json_encode($arr);

