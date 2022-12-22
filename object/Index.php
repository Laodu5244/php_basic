<?php

class Index {
  public $name;

  public function index() {
    return 'this is a method';
  }

  public function make() {
    $this->name = 'Lisa';
    return 'my name is '.$this->name;
  }
}

$index = new Index();
var_dump($index);

echo $index->index();
echo '<br/>';
echo $index->make();