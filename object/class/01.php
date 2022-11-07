<?php

# 创建一个类
class Person {}

# 创建类的实例对象
$Jack = new Person();
$Tina = new Person();

var_dump($Jack == $Tina);
var_dump($Jack === $Tina);
echo '<br>';

class Hero {
  # 类的属性
  public $name = '张无忌';
  public $skill = '乾坤大挪移';

  # 类的方法
  public function index() {
    echo '这是一个类的方法';
  }

  public function show() {
    // $this可以调用类中的属性
    return $this->name.'--'.$this->skill; 
  }
}

# 调用类的方法
$hero = new Hero;
$hero->index();
echo '<br>';

echo $hero->show();
echo '<br>';