<?php

function mysqli() {
	$conn = new mysqli('localhost:3388','root','sisisi','study');
	if ($conn->connect_error) {
		echo "<h2 style='color:red;'>database is not defined or connect is failed</h2>";
	}
	$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);

	$stat = $conn->query("SELECT * FROM `fruit`");
	$data = $stat->fetch_all(MYSQLI_ASSOC);
	return json_encode($data);
}

// echo mysqli();

function pdo() {
	try {
		$dsn = 'mysql:host=localhost;port=3388;dbname=study';
		$conn = new PDO($dsn,'root','sisisi');
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

		$stat = $conn->query("SELECT * FROM `fruit`");
		$data = $stat->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($data);
	}catch (Exception $error){
		echo json_encode($error->getMessage());
	}
}

echo pdo();