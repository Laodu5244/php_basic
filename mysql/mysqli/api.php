<?php

// 连接数据库
$mysqli = new mysqli('localhost', 'root', 'sisisi', 'tp')or die("数据库连接失败");
$mysqli->query('set names utf8');

header('Content-Type:application/json; charset=utf-8');
header('Access-Control-Allow-Headers:*');
header('Access-Control-Allow-Origin:' . $_SERVER['HTTP_ORIGIN']);
header("Access-Control-Allow-Credentials:true");

// 封装添加方法
function insertData($sql_add) {
  global $mysqli;
  $result = $mysqli->query($sql_add);

  if ($result) { echo "添加成功"; } 
  else { echo "添加失败"; }
}

// 封装更新方法
function updateData($sql_update) {
  global $mysqli;
  $result = $mysqli->query($sql_update);

  if ($result) { echo "更新成功"; } 
  else { echo "更新失败"; }
}

// 封装删除方法
function deleteData($sql_delete) {
  global $mysqli;
  $result = $mysqli->query($sql_delete);

  if ($result) { echo "删除成功"; } 
  else { echo "删除失败"; }
}

// 封装查询数据
function get_Data($sql_get) {
  global $mysqli;
  $result = $mysqli->query($sql_get);

  $fruits = $result->fetch_all(MYSQLI_ASSOC);
  echo json_encode($fruits);
}

// 插入数据
$sql_add = "INSERT INTO `fruits` (`fruit`,`price`) VALUES ('凤梨',6.5)";
// insertData($sql_add);

// 更新数据
$sql_update = "UPDATE `fruits` SET `fruit`='猕猴桃',`price`=9.9998 WHERE id = 2";
// updateData($sql_update);

// 删除数据
$sql_delete = "DELETE FROM `fruits` WHERE id = 4";
// deleteData($sql_delete);

// 查询数据
$sql_get = "SELECT * FROM `fruits`";
get_Data($sql_get);

// 关闭数据库
$mysqli->close();
die();