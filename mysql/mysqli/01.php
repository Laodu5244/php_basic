<?php

// 连接mysql数据库
$conn = new Mysqli('localhost:3366', 'root', 'sisisi', 'study');
if($conn->connect_error) echo '数据库连接失败'; 
$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);

// 查询语句
$stmt = $conn->query('select * from fruit');
$data = $stmt->fetch_all(MYSQLI_ASSOC);

header("Access-Control-Allow-Origin:*");
echo json_encode($data);