<?php

$conn = new mysqli('localhost:3388','root','sisisi','study');
$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);
$stat = $conn->query("SELECT * FROM hobby");

$data = $stat->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);

$conn->close();