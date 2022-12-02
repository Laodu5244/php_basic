<?php

$conn = new PDO('mysql:host=localhost;dbname=basic','root','sisisi');
$res = $conn->query('select * from heros');

$res->execute();
$heros = $res->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($heros);