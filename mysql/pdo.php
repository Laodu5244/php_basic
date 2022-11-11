<?php

$pdo = new PDO('mysql:host=localhost;dbname=basic','root','sisisi');
$pdo->prepare('set names utf8');

$stmt = $pdo->prepare('select * from heros');
$stmt->execute();
$heros = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($heros);
$pdo = null;