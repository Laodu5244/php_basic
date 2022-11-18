<?php

// 设置请求头
header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin:' . $_SERVER['HTTP_ORIGIN']);
header("Access-Control-Allow-Credentials:true");

// 连接数据库
$conn = new Mysqli('localhost','root','sisisi','basic');
if($conn->connect_error) exit('数据库连接失败');
$conn->query('set names utf8');

// 构建接口
$data = ['success'=>true];
$action = '';
if(!empty($_GET['action'])){
  $action = $_GET['action'];
}

// 读取数据
if($action == 'read'){
  $res = $conn->query("SELECT * FROM `heros`");
  $heros = $res->fetch_all(MYSQLI_ASSOC);
  $data['data'] = $heros;
}

// 读取单条
if($action == 'read_one'){
  $res = $conn->query("SELECT * FROM `heros` WHERE id=15");
  $heros = $res->fetch_all(MYSQLI_ASSOC);
  $data['data'] = $heros;
}

// 增加数据
if($action == 'insert'){
  $name = $_POST['name'];
  $skill = $_POST['skill'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];

  $sql = "INSERT INTO heros (name,skill,age,sex) VALUES ('$name','$skill',$age,'$sex')";
  $res = $conn->query($sql);

  if($res) {
    $data['message'] = '添加成功';
  } else {
    $data['message'] = '添加失败';
    $data['success'] = false;
  }
}

// 修改数据
if($action == 'update'){
  $name = $_POST['name'];
  $skill = $_POST['skill'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $id = $_POST['id'];

  $sql = "UPDATE heros SET name='$name',skill='$skill',age=$age,sex='$sex' WHERE id=$id";
  $res = $conn->query($sql);

  if($res) {
    $data['message'] = '修改成功';
  } else {
    $data['message'] = '修改失败';
    $data['success'] = false;
  }
}

// 删除数据
if($action == 'delete'){
  $id = $_POST['id'];
  $sql = "DELETE FROM heros WHERE id=$id";
  $res = $conn->query($sql);

  if($res) {
    $data['message'] = '删除成功';
  } else {
    $data['message'] = '删除失败';
    $data['success'] = false;
  }
}

echo json_encode($data);
$conn->close();