<?php

$dsn = 'mysql:host=localhost; port=3388; dbname=study';
$pdo = new PDO($dsn,'root','sisisi');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$pdo->query('set names utf8');

$stmt = $pdo->query('SELECT * FROM fruit');
$fruits = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($fruits);
$pdo = null;