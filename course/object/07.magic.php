<?php

class Person{
  protected $name;
	public $age = 18;
	private $data = ['name' => 'Jack', 'age' => 18];

  // 构造函数(不用调用,实例之后立即执行)
  public function __construct($name) {
    $this->name = $name;
    echo 'construct方法执行了, '.$this->name;
    echo '<br>';
  }
  // 析构函数(最后执行)
  public function __destruct() {
    echo '即将卸载, destruct函数执行了';
  }

	// __get: 读取protected,private或不存在的属性的值时调用 
	public function __get($data){
		echo '__get方法执行了';
	}
	// __set: 修改protected,private或不存在的属性的值时调用
	public function __set($data,$value){
		echo '__set方法执行了';
	}

	// isset: 判断值是否存在,protected,private的值无法识别
	public function __isset($name) {
		echo '__isset方法执行了';
	}
	// unset: 删除protected,private或不存在的属性的值时调用
	public function __unset($name){
		echo '__unset方法执行了';
	}

	// 调用一个不存在的方法时执行
	public function __call($name,$value) {
		echo '__call方法执行了';
	}
	// 调用一个不存在的静态方法时执行
	public static function __callStatic($name,$value){
		echo '__callStatic方法执行了';
	}
}

$person = new Person('Lisa');
$person->data; // __get
echo '<br>';
$person->data = [3,2,1]; // __set
echo '<br>';

unset($person->name); // __unset
echo '<br>';
var_dump(isset($person->age)); // __isset
echo '<br>';
var_dump(isset($person->name)); 
echo '<br>';

$person->call(); // __call
echo '<br>';
Person::callStatic(); // __callStatic
echo '<br>';