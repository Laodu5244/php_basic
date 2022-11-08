<?php

$pdo = new mysqli('localhost', 'root', 'sisisi', 'tp');
$pdo->query('SET NAMES utf8');

$herosData = $pdo->query('select * from heros');
$heros = array();
$res = array('error'=>false);

while($row = $herosData->fetch_assoc()) {
  array_push($heros,$row);
  $res['heros'] = $heros;
}
header('Access-Control-Allow-Origin:*');
header('Content-type:application/json');

echo json_encode($res);
