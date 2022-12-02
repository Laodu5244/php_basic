<?php

abstract class Data {
	abstract protected function record($data);
	public function select() {
		$this->record(['name' => 'Jack', 'age' => 18]);
	}
}

class User extends Data{
	protected $field = [];
	public function all() {
		$this->select();
		return $this->field;
	}
	protected function record($data){
		$this->field = $data;
	}

	// get方法需要一个参数
  public function __get($arr) {
		// echo 1234;die;
		if(isset($this->field[$name])){
			return $this->field[$name];
		}
		throw new Exception('query is undefined');
  }
}

try {
	$user = new User();
	print_r($user->all());
	echo '<br>';
	$user->name;
} catch (Exception $error){
	echo $error->getMessage();
}