<?php

// link mysql
$conn = new mysqli('localhost', 'root', 'sisisi', 'tp');
$conn->query('set names utf8');

$res = ['success' => true];

$sql = "insert into fruits (fruit,price)
values ('榴莲',23.8)";
$result = $conn->query($sql);

if ($result) {
  echo json_encode($res);
} else {
  $res['success'] = false;
  echo json_encode($res);
}