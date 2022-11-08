<?php

include('./db.php');

// 查询某一条数据(get获取的query参数)
$sql_one = "select * from heros where id={$_GET['id']}";
$stmt = $pdo->query($sql_one);
$hero = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($hero);
