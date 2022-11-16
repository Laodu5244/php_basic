<?php

// 创建一个类
class Dog {
  // 属性
  public $name = '旺财';

  // 方法
  public function eat() {
    echo '啃骨头';
  }
}

// 实例一个狗类对象
$dog = new Dog();

// 调用属性
echo $dog->name;
echo '<br>';

// 调用方法
echo $dog->eat();
echo '<br>';