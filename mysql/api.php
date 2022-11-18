<?php

$conn = new Mysqli('localhost', 'root', 'sisisi', 'basic');
if ($conn->connect_error) die('数据库连接失败');

$conn->query('set names utf8');
$data = ['success'=>true];

// 添加
function insert($sql) {
  global $conn,$data;
  $result = $conn->query($sql);
  if ($result) {
    $data['message'] = '插入成功';
    echo json_encode($data);
  } else {
    $data['message'] = '插入失败';
    $data['success'] = false;
    echo json_encode($data);
  }
}

// 修改
function update($sql) {
  global $conn,$data;
  $result = $conn->query($sql);
  if ($result) {
    $data['message'] = '修改成功';
    echo json_encode($data);
  } else {
    $data['message'] = '修改失败';
    $data['success'] = false;
    echo json_encode($data);
  }
}

// 删除
function delete($sql) {
  global $conn, $data;
  $result = $conn->query($sql);
  if ($result) {
    $data['message'] = '删除成功';
    echo json_encode($data);
  } else {
    $data['message'] = '删除失败';
    $data['success'] = false;
    echo json_encode($data);
  }
}

// 查询
function fetch($sql) {
  global $conn, $data;
  $result = $conn->query($sql);
  if($result->num_rows){
    $heros = $result->fetch_all(MYSQLI_ASSOC);
    $data['data'] = $heros;
    echo json_encode($data);
  } else {
    $data['message'] = '查询失败';
    $data['success'] = false;
    echo json_encode($data);
  }
}

// 查询单条
function fetchOne($sql) {
  global $conn, $data;
  $result = $conn->query($sql);
  if($result->num_rows){
    $heros = $result->fetch_all(MYSQLI_ASSOC);
    $data['data'] = $heros;
    echo json_encode($data);
  } else {
    $data['message'] = '查询失败';
    $data['success'] = false;
    echo json_encode($data);
  }
}

$sql_add = "INSERT INTO heros (name,skill,age,sex) VALUES ('韦小宝','嘴炮',21,'男')";
$sql_put = "UPDATE heros SET name='灭绝师太',skill='倚天剑',age=42,sex='女' WHERE id=17";
$sql_del = "DELETE FROM heros WHERE id=14";
$sql_get = "SELECT * FROM heros";
$sql_get_one = "SELECT * FROM heros WHERE id = 12";

// insert($sql_add);
// update($sql_put);
// delete($sql_del);
// fetch($sql_get);
fetchOne($sql_get_one);

$conn->close();