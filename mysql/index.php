<?php

// mysqli连接数据库
$conn = new Mysqli('localhost','root','sisisi','tp') or exit('数据库连接失败');
$conn->query('set names utf8');

$stmt = $conn->query('select * from heros');
$heros = $stmt->fetch_all(MYSQLI_ASSOC);

echo json_encode($heros);
$conn->close();

// pdo连接数据库
$pdo = new PDO("mysql:host=localhost;dbname=tp",'root','sisisi');
$stmt = $pdo->prepare('select * from heros');

// $stmt->execute();
// $heros = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo json_encode($heros);
// $pdo = null;