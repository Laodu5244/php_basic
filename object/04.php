<?php

class Person {
  // 静态属性
  public static $name = 'Tina';
  Public static $age = 24;

  public static function index () {
    return "php is best on the world";
  }
}

// 直接访问静态属性和方法
echo Person::$name;
echo '<br>';
echo Person::index();
echo '<br>';

// 抽象类 (只能继承 不能实例化)
abstract class Girl {}

class Lisa extends Girl {
  public function name() {
    return 'my name is Lisa';
  }
}

$lisa = new Lisa;
echo $lisa->name();
