<?php

$arr5 = ['hello','world','php'];
echo key($arr5); // 获取key值
echo '<br>'; 
next($arr5); // $arr5指针指向下一位
echo current($arr5); // 获取value值
echo '<br>'; 
echo prev($arr5); // $arr5指针指向上一位
echo '<br>';

$users = [
  ['name'=>'jack','age'=>15],
  ['name'=>'lisa','age'=>18],
  ['name'=>'tom','age'=>20],
];
?>

<table border="1">
  <tr>
    <th>编号</th>
    <th>姓名</th>
    <th>年龄</th>
  </tr>
  <?php while($user = current($users)): ?>
    <tr>
      <td><?php echo key($users)+1 ?></td>
      <td><?php echo $user['name'] ?></td>
      <td><?php echo $user['age'] ?></td>
    </tr>
  <?php next($users); endwhile; ?>
</table>