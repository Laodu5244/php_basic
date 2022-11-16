<?php

// 湖北
namespace Hubei;
# 命名空间中只能包含常量,类和函数
echo '命名空间是: '.__NAMESPACE__;
const Msg = "php is best on the world";

class Hubei {
  public function __construct(){
    echo "湖北的构造函数".'<br>';
  }
}
echo '<hr>';

// 武汉
namespace Wuhan;

echo '命名空间是: '.__NAMESPACE__.'<br>';
use Hubei\Hubei as Hu; // 继承
use const Hubei\Msg;

class Wuhan {
  public function __construct() {
    echo "武汉的构造函数".'<br>';
  }
}
$wuhan = new Hu();
echo Msg.'<br>';
echo '<hr>';

// 武昌
namespace Wuchang;

echo '命名空间是: '.__NAMESPACE__.'<br>';
use Hubei\Wuhan\Wuhan ; // 继承
use const Hubei\Msg;

class Wu_chang {
  public function __construct() {
    echo "武昌的构造函数".'<br>';
  }
}
$wu = new Wu_chang();
echo Msg.'<br>';