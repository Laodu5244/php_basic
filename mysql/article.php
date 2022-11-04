<?php

$pdo = new mysqli('localhost', 'root', 'sisisi', 'tp');
$pdo->query('SET NAMES utf8');

$art = $pdo->query('select * from article');
$article = array();
$res = array('error'=>false);

while($row = $art->fetch_assoc()) {
  array_push($article,$row);
  $res['article'] = $article;
}
header('Access-Control-Allow-Origin:*');
header('Content-type:application/json');

echo json_encode($res);