<?php

class Index {

  public $msg = "php is best on the world!";

  public function index() {
    return $this->msg;
  }
}

$index = new Index;

echo $index->index();
echo '<br>';

echo 1234;
echo '<br>';
print 5678;
echo '<br>';

$newTitle = 'php is best on the world!';
$NewTitle = 'php is best on the world!';
$new_title = 'php is best on the world!';

echo $newTitle.'---'.$NewTitle.'---'.$new_title;