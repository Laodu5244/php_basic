<?php

// 连接mysql数据库
$conn = new Mysqli('localhost', 'root', 'sisisi', 'tp');
if (mysqli_connect_errno()) exit("数据库连接失败");
$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);
// 设置默认字符编码
mysqli_set_charset($conn,'utf8');

// 查询语句
$stmt = $conn->query('select * from fruits');
$fruits = $stmt->fetch_all(MYSQLI_ASSOC);

echo json_encode($fruits);
$conn->close();