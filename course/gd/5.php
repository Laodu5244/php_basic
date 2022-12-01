<?php

include('./Captcha.php');

$captcha = new Captcha();
$code = $captcha->canvas();

file_put_contents('code.php',$code);