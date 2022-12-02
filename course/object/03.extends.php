<?php

class Person {
	public $name = 'Lisa';
	protected $count = 666;

	// final: 禁用子类重写
	public final function message() {
		return 'This is Person class messages';
	}
	public function counter() {
		return $this->count;
	}
}

// 继承
class User extends Person{
	public function send() {
		return $this->message();
	}

	// parent: 调用父类方法
	public function parent() {
		return parent::counter();
	}

	// 重写counter
	public function counter() {
		return $this->count = 123;
	}
}

// 使用父类的属性和方法
$user = new User();
echo $user->send();
echo '<br>';
echo $user->name;
echo '<br>';
echo $user->parent();
echo '<br>';
echo $user->counter();