<?php

$pdo = new mysqli('localhost', 'root', 'sisisi', 'tp');
$pdo->query('SET NAMES utf8');

$stu = $pdo->query('select * from students');
$students = array();
$res = array('error'=>false);

while($row = $stu ->fetch_assoc()) {
  array_push($students,$row);
  $res['students'] = $students;
}
header('Access-Control-Allow-Origin:*');
header('Content-type:application/json');

echo json_encode($res);
