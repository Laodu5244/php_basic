<?php

// 连接数据库(面向对象)
$conn = new Mysqli('localhost','root','sisisi','basic') or die('mysql is undefined');
$conn->query('set names utf8');

// 修改
/* $sql = "update heros set name='花满楼' where id=10";
$result = $conn->query($sql);

if ($result) echo '修改成功';
else echo '修改失败'; */

// 查询
$stmt = $conn->query('select * from heros');
$heros = $stmt->fetch_all(MYSQLI_ASSOC);
echo json_encode($heros);