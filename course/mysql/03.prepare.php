<?php

$dsn = 'mysql:host=localhost;dbname=tp';
$conn = new PDO($dsn, 'root', 'sisisi');
// 禁用预处理语句的模拟(使number不会转换为字符串)
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// 查询
function select($conn) {
	// prepare: 预准备执行语句(防止sql语句注入)
	$stat = $conn->prepare('SELECT * FROM fruits WHERE id<:id');
	$stat->execute([':id' => 10]);

	$fruits = $stat->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($fruits);
}

// 添加
function insert($conn) {
	$sql = "INSERT INTO fruits (fruit,price) VALUES (:fruit,:price)";
	$stat = $conn->prepare($sql);
	$stat->execute([':fruit' => '柠檬', ':price' => 8]);
	echo $conn->lastInsertId();
}

// 删除
function delete($conn) {
	$sql = "DELETE FROM fruits WHERE id = :id";
	$stat = $conn->prepare($sql);
	$res = $stat->execute([':id' => 19]);
	echo $res;
}

delete($conn);