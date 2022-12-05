<?php

$dsn = 'mysql: host=localhost;dbname=basic';
$conn = new PDO($dsn,'root','sisisi');

// 占位符
$sql = "SELECT * FROM heros WHERE id<?";
$stat = $conn->prepare($sql);
$stat->execute([$_GET['id']]);

$data = ['success'=>true];
$heros = $stat->fetchAll(PDO::FETCH_ASSOC);

if(!empty($_GET['id'])){
	$data['heros'] =$heros ;
} else {
	$data['success'] = false;
	$data['message'] = 'need a id param';
}

echo json_encode($data);
$conn = '';