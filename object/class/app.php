<?php
// 连接数据库
$conn = new mysqli('localhost', 'admin', 'woaisisi', 'demo');
if ($conn->connect_error) {
  die('连接失败,请检查用户名,密码');
}

// 接口
$action = 'read';

// 返回的数据对象
$res = array('error'=>false);

if(isset($_GET['action'])){
  $action =  $_GET['action'];
}

// 获取数据
if($action == 'read'){
  $conn->query('set fruit utf8');
  $result = $conn->query("SELECT * FROM `fruit_list`" );
  $fruit_list = array();
  while($row = $result->fetch_assoc()){
    array_push($fruit_list,$row);
    $res['fruit_list'] = $fruit_list;
  }
}

// 增加数据
if($action == 'create'){
  $fruit = $_POST['fruit'];
  $conn->query('set fruit utf8');
  $result = $conn->query("INSERT INTO `fruit_list` (`fruit`) VALUES ('$fruit')");
  if($result){
    $res['message'] = '增加成功';
  } else{
    $res['error'] = true;
    $res['message'] = '增加失败';
  }
}

// 更新数据
if($action == 'update'){
  $fruit = $_POST['fruit'];
  $id = $_POST['Id'];
  $conn->query('set fruit utf8');
  $result = $conn->query("UPDATE `fruit_list` SET `fruit` = '$fruit' WHERE `id` = '$id' ");

  if($result){
    $res['message'] = '更新成功';
  } else{
    $res['error'] = true;
    $res['message'] = '更新失败';
  }
}

// 删除数据
if($action == 'delete'){
  $id = $_POST['Id'];
  $result = $conn->query("DELETE FROM `fruit_list`  WHERE `id` = '$id' ");

  if($result){
    $res['message'] = '删除成功';
  } else{
    $res['error'] = true;
    $res['message'] = '删除失败';
  }
}

$conn->close();
header('Content-type:application/json');

// 返回数据
echo json_encode($res);
die();
?>
