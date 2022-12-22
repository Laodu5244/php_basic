<?php if (!$_GET) : ?>
	<a href="./05.method.php?action=add">insert</a>
	<a href="./05.method.php?action=del">delete</a>
	<a href="./05.method.php?action=upd">update</a>
	<a href="./05.method.php?action=read">select</a>
<?php 
else :
	$action = $_GET['action'];
	switch ($action) {
		case 'add':
			echo '执行添加功能';
			break;
		case 'del':
			echo '执行删除功能';
			break;
		case 'upd':
			echo '执行修改功能';
			break;
		case 'read':
			echo '执行查询功能';
			break;
	}
endif;
?>