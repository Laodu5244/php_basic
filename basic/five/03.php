<?php

$conn = new mysqli('localhost:3388', 'root', 'sisisi', 'study');

$stat = $conn->query("SELECT * FROM fruit");

$data = $stat->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);
