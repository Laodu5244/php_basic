<?php

$pdo = new PDO('mysql:host=localhost;dbname=tp','root','sisisi');

// 添加
// $sql = "insert into users(id,name,age,sex) values(null,'皮长山',32,'男')";
// $res = $pdo->exec($sql);
// echo($res);

// 删除
// $sql = "delete from users where id = 8";
// $res = $pdo->exec($sql);
// echo($res);

// 修改
// $sql = "update users set age = 25 where id = 9";
// $res = $pdo->exec($sql);
// echo($res);