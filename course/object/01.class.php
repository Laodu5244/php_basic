<?php

// 定义一个类
class User {
	// protected: 受保护的属性, 只有类内部可用
	protected $name; 
	// public: 公开的属性, 任何地方可用
	public $age = 18;

	// 方法
	public function setName($name) {
		// $this: 当前对象的指针, 用来读取类中的属性和方法
		$this->name = $name;
		echo '受保护的方法: '.$this->protect();
		echo '<br>';
		echo '私有方法: '.$this->private();
		echo '<br>';
		return $name;
	}

	public function sayName(){
		return 'my name is: ' . $this->name;
	}

	// 受保护的方法
	protected function protect(){
		return 'this is a protected function';
	}

	// 私有的方法(只能类内使用, 子类和外部都不能使用)
	private function private() {
		return 'this is a private function';
	}
}

// 定义一个对象
$user = new User();
var_dump($user);
echo '<hr>';

// 调用方法
echo $user->setName('Lisa');
echo '<br>';
echo $user->sayName();
echo '<br>';
// 函数外可用调用公开属性
echo 'my age is: '.$user->age;
echo '<hr>';

// 类可以生成多个对象(互相独立)
$girl = new User();
echo $girl->setName('Tina');