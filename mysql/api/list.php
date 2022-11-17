<?php

header('content-type:application/json');
header('Access-Control-Allow-Origin:*');

$conn = new Mysqli('localhost','root','sisisi','basic');
$result = $conn->query("SELECT * from heros");

$arr = [];
$heros = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($heros);
