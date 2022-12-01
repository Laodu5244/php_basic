<?php

$conn = new mysqli('localhost','root','sisisi','tp');
$res = $conn->query('select * from fruits');

$fruits = $res->fetch_all(MYSQLI_ASSOC);
echo json_encode($fruits);