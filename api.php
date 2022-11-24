<?php

$conn = new Mysqli('localhost', 'root', 'sisisi', 'tp');
if ($conn->connect_error) {
  exit('连接出现错误');
}
$conn->query('set names utf8');

$data = ['success' => true];
$res = $conn->query('select * from fruits');
$heros = $res->fetch_all(MYSQLI_ASSOC);

if (!$heros) {
  $data['data'] = $heros;
} else {
  $data['success'] = false;
  $data['message'] = '无法获取数据';
}

echo json_encode($data);
$conn->close();