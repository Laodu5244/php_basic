<?php

// 定义抽象类(只能继承 不能实例化)
abstract class Person {
	protected $name = 'Lisa';
	// 抽象方法
	abstract public function sayName(); 
}

class User extends Person{
	// 父类的抽象方法子类必须定义
	Public function sayName(){
		return 'My name is: '.$this->name;
	}
}

$user = new User();
echo $user->sayName();