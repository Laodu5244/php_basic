<?php

// pdo连接数据库
$pdo = new PDO('mysql:host=localhost;dbname=basic', 'root', 'sisisi');
$res = $pdo->query('select * from heros');
$res->execute();
$heros = $res->fetchAll(PDO::FETCH_ASSOC);

// mysqli连接数据库
$conn = new Mysqli('localhost','root','sisisi','tp');
$stmt = $conn->query('select * from users');
$users = $stmt->fetch_all(MYSQLI_ASSOC);

$data = ['success'=>true];
$action = '';
if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if($action == ''){
	$data['success'] = false;
	$data['message'] = 'param is not defined';
} elseif ($action == 'heros') {
	$data['heros'] = $heros;
} elseif ($action == 'users') {
	$data['users'] = $users;
}
echo json_encode($data);

$pdo = '';
$conn->close();