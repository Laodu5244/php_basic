<?php

$conn = new mysqli('localhost:3388','root','sisisi','study');
$data = [];
if($conn->connect_error) {
	echo 'database connect is failed';
} else {
	$data['message'] = 'database connect is succeed';
}

$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);
$stat = $conn->query("SELECT * FROM hobby");
$result = $stat->fetch_all(MYSQLI_ASSOC);

$data['data'] = $result;
echo json_encode($data);