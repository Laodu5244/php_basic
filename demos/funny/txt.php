<?php

// get txt
$data = file_get_contents('./store/index.txt');
var_dump($data);
echo '<br>';

$array = explode(' ', $data);
var_dump($array);
phpinfo();