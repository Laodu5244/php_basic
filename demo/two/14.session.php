<?php
session_start();
echo session_id();

$_SESSION['userName'] = 'Jack';

echo '<hr>';
echo 'session存的用户名:'.$_SESSION['userName'];

// 删除session中的一个字段
unset($_SESSION['userName']);

// 删除整个session
session_destroy();