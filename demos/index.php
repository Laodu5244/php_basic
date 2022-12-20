<?php

// authorization


$curl = curl_init();
header('Content-type:application/json');
// header('authorization '.base64_encode('$#@!(*&^%'));
$res = md5('$#@!(*&^%');
echo $res;