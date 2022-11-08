<?php

// mysqli连接数据库
$conn = mysqli_connect('localhost', 'root', 'sisisi', 'basic') or die('连接mysql失败');
$conn->query('set names utf8');

// 构建接口
$action = '';
if (isset($_GET['action'])) {
  $action = $_GET['action'];
}
$res = ['success' => true];

// 获取数据
if ($action == 'read') {
  $result = $conn->query('select * from heros');
  $heros = $result->fetch_all(MYSQLI_ASSOC);

  if ($result) {
    $res['heros'] = $heros;
  } else {
    $res['success'] = false;
  }
}

// 增加数据
if ($action == 'add') {
  $sql = "INSERT into heros (name,skill,age,sex) values ('张无忌','乾坤大挪移',23,'男')";
  $result = $conn->query($sql);

  if ($result) {
    $res['message'] = 'success';
  } else {
    $res['success'] = false;
    $res['message'] = 'rejected';
  }
}

// 删除数据
if ($action == 'delete') {
  $sql = "DELETE from heros where id=9";
  $result = $conn->query($sql);

  if ($result) {
    $res['message'] = 'success';
  } else {
    $res['success'] = false;
    $res['message'] = 'rejected';
  }
}

// 修改数据
if ($action == 'update') {
  $sql = "UPDATE heros set name='灭绝师太',skill='峨眉剑法',age=45,sex='女' where id=8";
  $result = $conn->query($sql);

  if ($result) {
    $res['message'] = 'success';
  } else {
    $res['success'] = false;
    $res['message'] = 'rejected';
  }
}

header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin:' . $_SERVER['HTTP_ORIGIN']);
header("Access-Control-Allow-Credentials:true");

echo json_encode($res);

$conn->close();
die();