<?php
header('Access-Control-Allow-Origin:*');
function mi() {
  $conn = new mysqli('localhost:3388', 'root', 'sisisi', 'study');
  $conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, true);

  $stat = $conn->query("SELECT * FROM fruit");
  $data = $stat->fetch_all(MYSQLI_ASSOC);
  echo json_encode($data);
}

function pdo() {
  $dsn = "mysql:host=localhost:3388;dbname=study";
  $conn = new PDO($dsn, 'root', 'sisisi');
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  $stat = $conn->query("SELECT * FROM fruit");
  $data = $stat->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($data);
}

mi();