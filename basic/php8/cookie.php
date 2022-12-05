<?php

setcookie('user','admin');
print_r($_COOKIE);

session_start();
$_SESSION['user'] = 'admin';
print_r($_SESSION);
