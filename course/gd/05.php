<?php

include('./Captcha.php');

$captcha = new Captcha();
$code = $captcha->canvas();

// 存到本地
file_put_contents('code.php',$code);