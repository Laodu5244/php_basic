<?php

$array = ['PHP','Html','Css','Js'];
// 序列化
$str =  serialize($array);
print $str;
echo '<br>';

// 反序列化
$arr = unserialize($str);
print_r($arr);