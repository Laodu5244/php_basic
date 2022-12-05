<?php

// mysqli connect mysql database
function mysqli() {
	$conn = new mysqli('localhost', 'root', 'sisisi', 'basic') or die('connect is failed');
	$conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);

	$stat = $conn->query('SELECT * FROM heros');
	$heros = $stat->fetch_all(MYSQLI_ASSOC);
	echo json_encode($heros);
}

// PDO connect mysql database
function pdo() {
	$dsn = 'mysql:host=localhost;dbname=basic';
	$conn = new PDO($dsn,'root','sisisi');
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

	$stat = $conn->query('SELECT * FROM heros');
	$heros = $stat->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($heros);
}

pdo();