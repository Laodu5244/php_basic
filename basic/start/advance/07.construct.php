<?php

class Con {
  public $color;
  // 构造出来一个类的实例
  public function __construct() {
    $this->color = 'orange';
    echo '这构造函数,'."我喜欢{$this->color}颜色";
  }
}

// 调用之后,构造函数立即执行
$con = new Con();
echo '<hr>';

class Dest {
  // 析构函数
  public function __destruct() {
    echo '构造函数最后执行'.'<br>';
  }

  // 构造函数
  public function __construct() {
    echo '构造函数最先执行'.'<br>';
  } 

  public function test() {
    echo '普通的方法'.'<br>';
  }
}
// __construct, __destruct是魔术方法(实例之后会自动执行)
$dest = new Dest();
$dest->test();
echo '<hr>'; 

// 魔术方法
class Person {
  protected $age;
  protected $money;
  
  public function __get($name){
    var_dump($name); 
  }

  public function __set($name,$value){
    var_dump($name);
    var_dump($value);
  }
}

$person = new Person(0,0);
$person->age = 1;
$person->money = 10000;