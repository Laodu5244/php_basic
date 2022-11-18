<?php

// 连接数据库
$conn = new Mysqli('localhost', 'root', 'sisisi', 'basic');
// 判断连接是否成功
if ($conn->connect_error) {
  die('数据库连接失败');
}

// 设定编码格式
$conn->query('set names utf8');
// 设置返回值
$data = ['success' => true];

// 添加一条数据
$result = $conn->query("insert into heros (name,skill,age,sex) values ('北丐','降龙十八掌',44,'男')");
// 判断是否插入成功
if ($result) {
  $data['message'] = '插入成功';
  echo json_encode($data);
} else {
  $data['success'] = false;
  $data['message'] = '插入失败';
  echo json_encode($data);
}

// 关闭数据库
$conn->close();