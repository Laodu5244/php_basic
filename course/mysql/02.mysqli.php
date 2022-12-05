<?php

$conn = new mysqli('127.0.0.1','root','sisisi','basic') or exit('数据库连接失败'); 
$sql = "SELECT * FROM `heros` WHERE id=3";

$stat = $conn->query($sql);
$heros = $stat->fetch_assoc();

$data = ['success' => true];
$data['heros'] = $heros;
echo json_encode($data);