<?php

class Person {
  // private: 私有的 只能自己访问
  private $age = 18;
  // 受保护的,只能自己和子类访问
  protected $name = 'Lisa';

  // public: 所有作用域可以访问
  public function method() {
    return 'php is very good';
  }

  public function show () {
    return 'hello world';
  }
}

class Girl extends Person {
  public function age() {
    return $this->age;
  }

  public function name() {
    return $this->name;
  }

  // 重写父类的方法
  public function show () {
    return '重写父类的方法';
  }
}

$girl = new Girl;
echo $girl->method();
echo '<br>';
echo $girl->name() ;
echo '<br>';

echo @($girl->age()) ; # 不能访问
echo $girl->show();


