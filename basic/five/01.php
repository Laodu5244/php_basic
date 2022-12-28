<?php

session_start();
$_SESSION['id'] = md5(10);
echo $_SESSION['id'];
var_dump($_SESSION);

unset($_SESSION['id']);
session_destroy();
var_dump($_SESSION);


try {
  $number = 20;
  if ($number >= 10) {
    throw new Exception('number必须小于10');
  }
} catch (Exception $error) {
  echo $error->getMessage();
}

$int = 123;
if (!filter_var($int, FILTER_VALIDATE_INT)) {
  echo 'not a number';
} else {
  echo 'is a number';
}
