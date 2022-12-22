<?php

class Mysql {
  // 链接数据库
  private function conn() {
    $conn = new mysqli('localhost:3388', 'root', 'sisisi', 'study');
    $conn->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE,true);
    $conn->query('set names utf8');
    return $conn;
  }

  // 单条查询
  public function find($table, $id=1) {
    $conn = $this->conn();
    $sql = "SELECT * FROM $table WHERE id=$id";

    $stat = $conn->query($sql);
    $data = $stat->fetch_assoc();
    return json_encode($data);
  }

  // 列表查询
  public function list($table, $count=10) {
    $conn = $this->conn();
    $sql = "SELECT * FROM $table LiMIT $count";
    $stat = $conn->query($sql);

    $data = $stat->fetch_all(MYSQLI_ASSOC);
    return json_encode($data);
  }
}

$db = new Mysql();
// echo $db->find('hobby');
echo $db->list('hobby', 5);