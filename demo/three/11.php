<?php

$arr = ['hello','php','thinkphp'];

//解构赋值
list($a,$b,$c) = $arr;
echo $a.'-'.$b.'-'.$c;
echo '<br>';

$user = ['name'=>'Lisa', 'age'=>18];
list('name'=>$name,'age'=>$age) = $user;
echo $name.'-'.$age;
echo '<hr>';

$users = [
  ['name'=>'jack','age'=>15],
  ['name'=>'lisa','age'=>18],
  ['name'=>'tom','age'=>20],
];
foreach($users as $key=>&$u) {
  $users[$key]['age'] += 50;
  echo $key.'='.$u['name'].'='.$u['age'].'<br>';
}
