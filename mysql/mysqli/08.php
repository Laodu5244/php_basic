<?php

$conn = new mysqli('localhost:3366','root','sisisi','study');
$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);

$sql = "INSERT INTO fruit (fruit,price) VALUES ('香蕉',5.98)";
$conn->query($sql);

$stat = $conn->query("SELECT * FROM fruit");
$data = $stat->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);