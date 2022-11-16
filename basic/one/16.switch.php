<?php

$status = 'warning';

switch ($status) {
  case 'success': 
    print 'success'; 
    break;
  case 'error':
    print 'error';
    break;
  // 条件都没有满足执行default
  default:
  echo 'default....';
}
echo '<br>';

$age = 16;

switch ($age):
  case $age < 12: 
    echo '少年';
    break;
  case $age < 18:
    echo '青年';
    break;
  default:
    echo '成年';
endswitch;
