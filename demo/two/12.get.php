<?php

// $_GET接收前端的参数 ?a=10&b=20
echo '<pre>';
print_r($_GET);
echo '</pre>';

setcookie('siteName','php中文网');

echo $_COOKIE['siteName'];