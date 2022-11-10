<?php

// 连接数据库(面向过程)
$conn = mysqli_connect('localhost','root','sisisi','basic') or die('mysql is undefined!');
mysqli_query($conn,'set names utf8');

// 添加
/* $sql = "insert into heros (name,skill,age,sex) values ('陆小凤','灵犀一指',26,'男')";
$result = mysqli_query($conn,$sql);

if ($result) echo '添加成功';
else echo '添加失败'; */

// 查询
$stmt = mysqli_query($conn,'select * from heros');
$heros = mysqli_fetch_all($stmt,MYSQLI_ASSOC);
echo json_encode($heros);





