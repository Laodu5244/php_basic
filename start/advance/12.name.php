<?php

# 命名空间中只能包含常量,类和函数
namespace Person;

class Person {
  public function __construct() {
    echo "这是一个Person空间的构造函数".'<br>';
  }
}

# 类常量: 只属于当前的命名空间
const Name = '这是一个Person空间的类常量'.'<br>';

$person = new Person();
echo Name;

// 查看当前是哪个命名空间
echo '当前命名空间: '.__NAMESPACE__;
echo '<Hr>';

# 第二个命名空间(通常一个文件只有一个)
namespace Humen;

// 使用Person命名空间的属性和方法
use Person\Person as Humen;
use const Person\Name;

$humen = new Humen();
echo Name;
// 查看当前是哪个命名空间
echo '当前命名空间: '.__NAMESPACE__;
