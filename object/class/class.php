<?php

class Person {
  // 属性
  public $name = 'Jack';
  // private定义的是私有属性
  private $email = '"Jack@gmail.com"';

  // 方法
  public function getEmail() {
    return $this->email;
  }

  // 构造函数(自执行)
  public function __construct($name, $email) {
    $this->name  = $name;
    $this->email = $email;
  }

  # 析构函数(自执行)
//  public function __destruct() {
//    echo __CLASS__ . "代码执行完成,即将销毁!";
//  }
}

// 实例化对象
$person = new Person("lisa",'nothing');
// 调用属性的时候去掉$
echo $person->name;
echo '<br>';
// 通过方法获取私有属性
echo $person->getEmail();
echo '<hr>';

$_person = new Person("henry", 'hahaha@email');
echo $_person->name;
echo '<br>';
echo $_person->getEmail();
echo '<hr>';

// Customers继承Person
class Customers extends Person {
  private $salary = '3000';

  public function setSalary($salary) {
    $this->salary = $salary;
  }

  public function getSalary(){
    return $this->salary;
  }
  # 构造函数
  public function __construct($name, $email,$salary) {
    # 调用父级的构造函数
    parent::__construct($name, $email);
    $this->salary = $salary;
  }

}

$customer = new Customers('lisa','it\'s nothing','10000');

echo $customer->getEmail();
echo "<br>";
echo $customer->getSalary();
echo "<hr>";

$customer2 = new Customers('missu', 'missu@qq.com','10086');
echo $customer2->getSalary();