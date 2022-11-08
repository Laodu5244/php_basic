<?php

/**
 * Mysql: 数据库
 * sql: 结构化的查询语言
 * 
 * 三大数据类型:  
 *   1. 数值, 整数, 浮点等
 *   2. 字符串, varchar, char, text等
 *   3. 日期和时间
 * 
 * PDO: Php Data Objects, php扩展类库  
 */

$pdo = new PDO('mysql:host=localhost;dbname=tp','root','sisisi');
$user_list = $pdo->query('select * from users')->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($user_list);
