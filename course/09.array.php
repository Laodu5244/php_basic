<?php

// 索引数组
$arr = array(3, 2, 1);
print_r($arr);
echo '<br>';
echo $arr[1];
echo '<br>';

// 关联数据
$person = ['name' => 'Lisa', 'age' => 18];
print_r($person);
echo '<br>';
echo $person['name'];
echo '<br>';

$person['sex'] = '女'; # 添加或修改某一项
print_r($person); 
echo '<hr>';

// 通过指针读取数组元素
$arr = ['first','second'];
echo key($arr); # 键
echo '<br>';
echo current($arr); # 值
echo '<br>';
echo next($arr); # 下一个值
echo '<br>';
echo prev($arr); # 上一个值
echo '<hr>';
?>

<?php 
// 二维数组
$users = [ 
  ['name' => 'Lisa', 'age' => 18],
  ['name' => 'Jack', 'age' => 21],
  ['name' => 'Tina', 'age' => 24],
]; ?>
<!-- php与html混编(mvc) -->
<table border='1'>
	<tr>
		<th>编号</th>
		<th>姓名</th>
		<th>年龄</th>
	</tr>
	<?php while($user = current($users)): ?>
	<tr>
		<td><?php echo key($users)+1; ?></td>
		<td><?php echo $user['name']; ?></td>
		<td><?php echo $user['age']; ?></td>
	</tr>
	<?php next($users); endwhile; ?>
</table>
<hr>

<?php

// list方法
$array = ['hello','world'];
list($a,$b) = $array;
echo $a.'-'.$b;
echo '<br>';

$users = [ 
  ['name' => 'Lisa', 'age' => 18],
  ['name' => 'Jack', 'age' => 21],
];
while(list('name'=>$name,'age'=>$age)=current($users)){
	echo "name: {$name}, age: {$age} <br/>";
	next($users);
}
echo '<hr>';

// foreach方法
foreach($users as $item){
	print_r($item);
}
echo '<br>';

// foreach 获取键值对
foreach($users as $key=>$item){
	echo $key.'='.$item['name'].'---'.$item['age'].'<br>';
}