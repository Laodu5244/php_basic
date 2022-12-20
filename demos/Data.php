<?php

class Data {
  public $conn;
  
  public function __construct() {
    $dsn = "mysql:host=localhost:3388;dbname=study";
    $conn = new PDO($dsn, 'root', 'sisisi');
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $this->conn = $conn;
  }
  
  public function select() {
    $stat = $this->conn->query('SELECT * FROM hobby');
    $data = $stat->fetchAll(PDO::FETCH_ASSOC);
    
    return json_encode($data);
  }
  
  public function delete() {
    $d = ['message' => 'succeed'];
    $result = $this->conn->query('DELETE FROM hobby WHERE id=5');
    if($result) {
      $d['data'] = $result;
    }else {
      $d['message'] = 'failed';
      $d['data'] = $result;
    }
    return json_encode($d);
  }
}

$data = new Data();
// echo $data->delete();
echo $data->select();

