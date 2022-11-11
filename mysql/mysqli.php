<?php

$conn = new Mysqli('localhost','root','sisisi','basic') or exit("数据库连接失败");
$conn->query('set names utf-8');

$stmt = $conn->query('select * from heros');
$heros = $stmt->fetch_all(MYSQLI_ASSOC);

echo json_encode($heros);
$conn->close();