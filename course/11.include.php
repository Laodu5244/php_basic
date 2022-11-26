<?php

// include: 加载失败下面代码继续执行
include('./index.html');
// require: 加载失败直接抛出致命错误
require('./index.html');

// 加载一次(防止多次加载)
include_once 'fun.php';
// 调用引入文件的方法
echo fun();
echo '<br>';

include('./Model.php');
echo Model\fun();
echo '<hr>';

// var_export输出方法
$person = [
  ['name'=>'Lisa','hobby'=>'music'],
  ['name'=>'Tina','hobby'=>'book']
];
$config = var_export($person,true);
echo $config;
echo '<br>';

// 生成一个php文件
file_put_contents('database.php','<?php return '.$config.';');

$database = include('./database.php');
print_r($database);
echo '<hr>';

// 序列化为字符串
$str = serialize($person);
var_dump($str);
echo '<br>';

//反序列化
$arr = unserialize($str);
print_r($arr);
echo '<hr>';

// 数组转json
$json = json_encode($person);
echo $json;
echo '<br>';

//json转数组对象
$array = json_decode($json);
var_dump($array);
echo '<hr>';

// 缓存
function cache($name,$data=null){
  $file = 'cache'.DIRECTORY_SEPARATOR.md5($name).'.php';
  if(is_null($data)){
    // 取数据
    $content = is_file($file)?file_get_contents($file):null;
    return unserialize($content)?:null;
  } else {
    // 存数据
    return file_put_contents($file,serialize($data));
  }
}
$data = include 'database.php';
// 储存文件到cache目录
cache('db',$data);
// 输出缓存的文件
print_r(cache('db'));