<?php

// 引入封装好的数据库连接
include('./db.php');

// 查询数据
$stmt = $pdo->query('select * from heros');

$heros = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($heros);

