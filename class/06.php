<?php

# 常量不可更改

// define定义常量
define('Host','localhost');
echo Host;
echo '<br>';

// const定义常量
const Name = 'Tina';
echo Name;
echo '<br>';

// final: 类不能被继承
final class Person {}

// class P extends  Person {} # 不能继承,报错

class Girl {
  public $name = 'Lisa';
  public $age = 19;
  public static $city = '武汉';
   
  public function show() {
    # self: 访问类中的静态属性
    return $this->name.'___'.$this->age.'___'.self::$city;
  }
}

class Women extends Girl {
  public function show() {
    // 继承父类的方法
    return parent::show();
  }
}

$women = new Women;
echo $women->show();