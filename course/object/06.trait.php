<?php

// trait: 可以实现多继承
trait Root {
  public function root() {
    return 'This is root trait';
  }
}

trait Human {
  use Root;
  public function name() {
    return 'Lisa';
  }

  public function best() {
    return 'Php is best on the world';
  }
}

trait Person {
  public function age() {
    return 18;
  }

  public function best() {
    return 'Php is best!';
  }

  // trait也可以定义抽象方法(子类必须定义)
  abstract public function hobby();

  // 静态方法
  public static function static() {
    return 'show...static';
  }
}

class People {
  // trait的方法优先于父类的方法
  public function age() {
    return 66;
  }
}

class User extends People {
  // 使用多个特性
  use Human, Person {
    // 多个trait有同名方法的处理
    Human::best insteadof Person;
    // 给方法改名
    Person::best as good;
    // 设置受保护的方法
    Human::best as protected ;
  }

  // 类本身的方法优先于trait的方法
  public function name() {
    return 'Jack';
  }

  public function show() {
    return '类内调用受保护的方法: ' . $this->best();
  }

  public function hobby() {
    return "I like beautiful girl";
  }
}

$user = new User();
echo $user->name();
echo '<br>';
echo $user->age();
echo '<br>';

echo $user->show();
echo '<br>';
// 调用改名后的方法
echo '改名后的方法: ' . $user->good();
echo '<hr>';

echo $user->root();
echo '<br>';
echo '抽象方法: ' . $user->hobby();
echo '<br>';
echo '静态方法: ' . $user->static();
echo '<br>';
echo '通过类调用静态方法: ' . User::static();