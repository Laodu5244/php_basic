<?php

if (!$_POST['submit']) {
  exit('非法访问,请从前端页面注册');
}

if (!$_POST['username'] || !$_POST['password'] || !$_POST['pwd']) {
  exit('输入不能为空');
}

if ($_POST['password'] !== $_POST['pwd']) {
  exit('密码有误');
}

$username = $_POST['username'];
$password = MD5($_POST['password']);

// 写入数据
$pdo = new PDO('mysql:host=localhost;dbname=tp','root','sisisi');
$sql = "insert into register(id,username,password) values(null,'$username','$password')";
$result = $pdo->exec($sql);

if ($result) {
  echo '注册成功';
} else {
  echo '注册失败';
}
