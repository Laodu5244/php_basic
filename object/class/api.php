<?php

// 封装添加方法
function insertData($sql_add) {
  // 连接数据库
  $mysqli = new mysqli('localhost', 'admin', 'woaisisi', 'demo');
  // 判断数据库是否连接成功
  if ($mysqli->connect_errno) {
    // 只要不为0,就表示连接失败了
    die($mysqli->connect_error);
  }
  // 设定编码格式
  $mysqli->query('set fruit utf8');
  $result = $mysqli->query($sql_add);
  if ($result) {
    echo "插入成功";
  } else {
    echo "插入失败";
  }
  // 关闭数据库
  $mysqli->close();
}

// 封装更新方法
function updateData($sql_update) {
  $mysqli = new mysqli('localhost', 'admin', 'woaisisi', 'demo');
  if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
  }
  $mysqli->query('set fruit utf8');
  $result = $mysqli->query($sql_update);
  if ($result) {
    echo "更新成功";
  } else {
    echo "更新失败";
  }
  $mysqli->close();
}

// 封装删除方法
function deleteData($sql_delete) {
  $mysqli = new mysqli('localhost', 'admin', 'woaisisi', 'demo');
  if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
  }
  $mysqli->query('set fruit utf8');
  $result = $mysqli->query($sql_delete);
  if ($result) {
    echo "删除成功";
  } else {
    echo "删除失败";
  }
  $mysqli->close();
}

// 封装查询数据
function get_Data($sql_get) {
  $mysqli = new mysqli('localhost', 'admin', 'woaisisi', 'demo');
  if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
  }
  $mysqli->query('set fruit utf8');
  $result = $mysqli->query($sql_get);

  // 判断是否有数据
  if ($result ->num_rows > 0 ){
    // 查询第一种方法
    /*$row = $result->fetch_row();
    while ($row = $result->fetch_row()) {
      print_r($row);
    }*/
    //查询第二种方法
    /*while ($row = $result->fetch_array(MYSQLI_ASSOC)){
      print_r($row);
    }*/
    //查询第三种方法
    $row = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($row);
  }
  $mysqli->close();
}

// 操作数据库
$sql_add = "INSERT INTO `fruit_list` (`Id`, `fruit`) VALUES (NULL, '凤梨')";

$sql_update = "UPDATE `fruit_list` SET `fruit` = '苹果' WHERE id = 2";

$sql_delete = "DELETE FROM `fruit_list` WHERE id = 11";

$sql_get = "SELECT * FROM `fruit_list`";

// 插入数据
//insertData($sql_add);
// 更新数据
//updateData($sql_update);
// 删除数据
//deleteData($sql_delete)
// 查询数据
get_Data($sql_get)
?>