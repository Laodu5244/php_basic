<?php

class Person {
	// 静态属性
	protected static $hobby = 'computer';
	public static $name='Lisa';
	// 定义常量
	const Age = 18;

	public function use() {
		// 调用静态属性
		return 'this is a static property: '.self::$hobby;
	}

	// 静态方法(无法使用$this指针)
	public static function static() {
		return 'this is a static method: '.self::$name;
	}

	public function const() {
		return 'method use const: '.self::Age;
	}
}

$person = new Person();
// 静态属性
echo $person->use();
echo '<br>';
// 静态方法
echo $person->static();
echo '<hr>';

// 类中方法使用常量
echo $person->const();
echo '<br>';
// 直接使用常量
echo '类外直接使用常量: '.Person::Age;