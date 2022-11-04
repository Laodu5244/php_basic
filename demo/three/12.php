<?php

$user = ['Lisa', 'Jack'];

# 末尾添加一个
array_push($user,'mary');
print_r($user);
echo '<br>';

# 末尾删除一个
array_pop($user);
print_r($user);
echo '<br>';

# 开头添加一个
array_unshift($user,'Tina');
print_r($user);
echo '<br>';

# 开头删除一个
array_shift($user);
print_r($user);
echo '<br>';

# 获取数组的长度
echo count($user);
echo '<br>';

