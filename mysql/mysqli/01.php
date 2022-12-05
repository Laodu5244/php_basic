<?php

// 连接mysql数据库
$conn = new Mysqli('localhost', 'root', 'sisisi', 'tp');
if (mysqli_connect_errno()) exit("数据库连接失败");
// 设置默认字符编码
mysqli_set_charset($conn,'utf8');

// 查询语句
$stmt = $conn->query('select * from fruits');
$users = $stmt->fetch_all(MYSQLI_ASSOC);

// echo json_encode($users);
var_dump($users);
