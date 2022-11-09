<?php

// 连接mysql数据库
$conn = mysqli_connect('localhost','root','sisisi','tp');
if(mysqli_connect_error()) exit('数据库链接失败');
$conn->query('set names utf8');

// 查询数据列表
$sql = "select * from fruits";
$stmt = $conn->query($sql);

$fruits = $stmt->fetch_all(MYSQLI_ASSOC);
// echo json_encode($fruits);

// 查询单条数据
$sql_one = "select * from fruits where id=3";
$msg = $conn->query($sql_one);

$fruit = $msg->fetch_assoc();
echo json_encode($fruit);