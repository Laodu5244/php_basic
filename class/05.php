<?php

// 接口
interface file {
  const NAME= 'Lisa';
  const AGE = 18;

  public function param($param);
}

// 类使用接口
class Person implements file{
  public $name = file::NAME;
  public $age = file::AGE;

  // // 构造方法
  // public fonction __construct($name,$age){
  //   $this->name = $name;
  //   $this->age = $age;
  // }

  public function param($param){
    return $this->param = $param;
  }
}

$person = new Person;
echo $person->param('my name is Tina');
echo '<br>';

echo $person->name.'~~~'.$person->age;