<?php

class Person {
  public $name = 'Lisa';
  public $age = 18;
  public function index() {
    echo 'hello php object!';
  }
}

// 类中new出来的实例是对象
$person = new Person();
var_dump($person);
echo '<br>';

// 访问对象的属性
echo $person->name.'---'.$person->age;
echo '<br>';
// 调用对象的方法
$person->index();
echo '<hr>';

// new stdClass可以创建一个标准对象
$obj = new stdClass();
$obj->name = 'php中文网';
// 标准对象的特殊方法
$obj->server = function (){
  return '标准类中的标准对象的特殊方法';
};

print $obj->name;
echo '<br>';
print call_user_func($obj->server);
