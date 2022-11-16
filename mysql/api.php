<?php

$conn = new Mysqli('localhost','root','sisisi','basic');
$stmt = $conn->query('SELECT * from `heros`');

$heros = $stmt->fetch_all(MYSQLI_ASSOC);
// print json_encode($heros);

$pdo = new PDO('mysql:host=localhost;dbname=basic','root','sisisi');
$stmt = $pdo->query('SELECT * from heros');
$stmt->execute();

$heros = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($heros);