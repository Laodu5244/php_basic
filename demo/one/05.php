<?php

$name = 'jack';
function show(){
  echo $GLOBALS['name'];
  echo '<br>';
}
show();

var_dump(isset($name));
echo '<br>';

unset($name);
var_dump(isset($name));
echo '<br>';

