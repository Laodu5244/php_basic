<?php

include('./db.php');

// 增加数据
$sql_add = "insert into heros (id,name,skill,age,sex) values (null,'梅超风','九阴白骨爪','28','女')";

/* $result = $pdo->exec($sql_add);
if ($result) echo '添加成功'; 
else echo '添加失败';
echo $pdo->lastInsertId(); */

// 修改数据
$sql_put = "update heros set name='段誉',skill='凌波微步',sex='男' where id=4";

/* $result = $pdo->exec(sql_put);
if ($result) echo '修改成功'; 
else echo '修改失败'; */

// 删除数据(删除数据一定要加where,否则就只能跑路了)
$sql_del = "delete from heros where id=6";

$result = $pdo->exec($sql_del);
if ($result) echo '删除成功'; 
else echo '删除失败';