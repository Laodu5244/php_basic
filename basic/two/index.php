<?php

echo "hello world";
echo "<br>";

if(!isset($_COOKIE['userName'])) {
  header('Location:login.php');
} else {
  echo $_COOKIE['userName'].'欢迎回来'.'<br>';
}