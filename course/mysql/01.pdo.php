<?php

// 设置请求头
header('Content-type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin: *');

try {
	$conn = new PDO(
		'mysql:host=localhost;dbname=tp;charset=utf8',
		'root',
		'sisisi',
	);
	// 修改keys为小写(防止大写字母存在)
	$conn->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
	// 修改返回关联数组
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $error) {
	exit($error->getMessage());
}

// 添加
function insert($conn) {
	$sql = "INSERT INTO `fruits`(`fruit`,`price`) VALUES ('百香果',5.5)";
	$result = $conn->query($sql);
	echo json_encode($result);
}
// 修改
function update($conn) {
	$sql = "UPDATE `fruits` set price=2.68,fruit='甜杏' WHERE id=8";
	$result = $conn->query($sql);
	echo json_encode($result);
}
// 删除
function delete($conn) {
	$sql = "DELETE FROM fruits WHERE id=6";
	$result = $conn->query($sql);
	echo json_encode($result);
}

// 查询
function select($conn) {
	$stat = $conn->query('SELECT * FROM `fruits`');
	$fruits = $stat->fetchAll();
	echo json_encode($fruits);
}

// 循环获取数组 (方便对数据操作)
function forArray($conn){
	$stat = $conn->query('SELECT * FROM `fruits` WHERE id>5 LIMIT 4');
	$fruits = []; 

	while($item = $stat->fetch()){
		array_push($fruits,$item);
	}
	echo json_encode($fruits);
}

forArray($conn);
$conn = ''; //关闭数据库