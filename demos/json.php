<?php

// to json
$array = ['name'=>'Lisa','age'=>18];
$data = json_encode($array);
echo $data;
echo '<br>';

// to array
$decode = json_decode($data);
print_r($decode);