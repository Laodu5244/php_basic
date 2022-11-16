<?php

// 类常量
class Person {
  const Names = 'Lisa';
  public static function get() {
    // 类内调用
    return self::Names;
  }
}
// 类外调用
echo Person::Names;
echo Person::get();
echo '<hr>';

// child类继承Father类
class Father {
  public $name = 'Jack'.'<br>';
  public $sex = '男'.'<br>';

  public function say() {
    return 'hello php';
  }
}

class Child extends Father {}
$child = new Child();

echo $child->name;
echo $child->sex;
echo $child->say();
