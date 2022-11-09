<?php

$conn = new Mysqli('localhost','root','sisisi','tp');
if(mysqli_connect_error()) exit('数据库链接失败');
$conn->query('set names utf8');

$res = ['success'=>true];

$sql = "update fruits set fruit='火龙果',price=8.8 where id=2";
$result = $conn->query($sql);

if ($result) {
  echo json_encode($res);
} else {
  $res['success'] = false;
  echo json_encode($res);
}