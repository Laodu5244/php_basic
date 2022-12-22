<?php

$file = $_FILES['image'];
// 唯一的文件名
$name = microtime(true) . md5(rand(1,100000)); 
$res = substr($_FILES['image']['name'],-3);

if($file) {
  // 限制大小
  if($file['size'] > 1024 * 1024 * 2) {
    echo json_encode('文件大小超出限制(2M)'); 
    exit;
  }

  // 限制类型
  $imgArray = ['image/png','image/jpeg','image/gif'];
  if(!in_array($file['type'],$imgArray)) {
    echo json_encode('文件不是图片类型'); 
    exit;
  }

  // 生成当前日期的目录
  $dirPath = './images/'.date('Y-m-d');
  if(!is_dir($dirPath)) {
    // 创建目录
    mkdir($dirPath,0777,true);
  }

  $result = move_uploaded_file($file['tmp_name'],"{$dirPath}/{$name}.{$res}");
  
  $data = ['message' => $result];
  echo json_encode($data);
}