<?php
class Person{
  public $msg = "php is best on the world!";

  public function index(){
    return $this->msg;
  }
}

$person = new Person;
echo $person->msg;
?>