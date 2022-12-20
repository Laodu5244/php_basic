<?php
function pdo() {
  $dsn = 'mysql:host=localhost:3388;dbname=study;';
  $conn = new PDO($dsn,'root','sisisi');
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  
  $stat = $conn->query("SELECT * FROM hobby");
  $data = $stat->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($data);
}

pdo();