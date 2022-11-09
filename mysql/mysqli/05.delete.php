<?php

$conn = mysqli_connect('localhost','root','sisisi','tp');
if(mysqli_connect_error()) {
  exit('数据库连接失败');
} else {
  $res = ['success'=>true]; 
}
$conn->query('set names utf8');

$sql = "delete from fruits where id = 5";
$result = $conn->query($sql);

if ($result) {
  echo json_encode($res);
} else {
  $res['success'] = false;
  echo json_encode($res);
}
