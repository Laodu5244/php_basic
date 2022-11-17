<?php

// 连接数据库
$conn = new Mysqli('localhost','root','sisisi','basic');
if($mysqli->connect_error) exit('数据库连接失败');
$conn->query('set names utf8');

// 构建接口
$data=['success'=>true];
$id = -1;
if(!empty($_POST['id'])){
  $id = $_POST['id'];
}

// 设置请求头
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin:' . $_SERVER['HTTP_ORIGIN']);
header("Access-Control-Allow-Credentials:true");

if($_POST['id'] == 'all'){
  $stmt = $conn->query("select * from heros");
  $heros = $stmt->fetch_all(MYSQLI_ASSOC);
  $data['data']=$heros;
  echo json_encode($data);
}else{
  $stmt = $conn->query("select * from heros where id=$id");
  $hero = $stmt->fetch_all(MYSQLI_ASSOC);
  $data['data']=$hero;
  echo json_encode($data);
}
