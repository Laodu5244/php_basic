<?php

// 定义一个接口
interface Human {
	// 接口的方法是抽象方法,子类必须定义
	public function get();
	public function set($name);
}

// implements: 继承接口
class Person implements Human {
	public $name = 'Jack';

	public function get() {
		return 'My name is: '.$this->name;
	}

	public function set($name){
		return 'My new name is: '.$name;
	}
}

$person = new Person();
echo $person->get();
echo '<br>';
// set方法必须接收一个参数
echo $person->set('Lisa');