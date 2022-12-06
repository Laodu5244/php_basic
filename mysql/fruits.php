<?php

$conn = new mysqli('localhost','root','sisisi','tp');
$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);

$stat = $conn->query('SELECT * FROM `fruits`');
$data = $stat->fetch_all(MYSQLI_ASSOC);

// echo json_encode($data);

$pdo = new PDO('mysql:host=localhost;dbname=tp','root','sisisi');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

$res = $pdo->query("SELECT * FROM `users`");
$users = $res->fetchALL(PDO::FETCH_ASSOC);

// echo json_encode($users);