<?php
	$dsn = 'mysql:host=localhost;dbname=basic';
	$conn = new PDO($dsn, 'root', 'sisisi');

	$sqlAll = "SELECT * FROM users";
	$stat = $conn->query($sqlAll);
	$data = $stat->fetchAll();

	// 分页
	$limit = 10;
	$count = count($data);
	$allPage = ceil($count / $limit);

	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$offset = ($page - 1) * $limit;
	$sql = "SELECT *FROM users LIMIT $offset,{$limit}";
	$users = $conn->query($sql)->fetchAll();

	$prev = ($page == 1) ? 1 : ($page - 1);
	$next = ($page == $allPage ) ? $allPage : ($page + 1);
?>

<body style="background:#ccc">
	<table border="1">
		<tr>
			<th>姓名</th>
			<th>邮箱</th>
			<th>性别</th>
			<th>时间</th>
		</tr>
		<?php foreach ($users as $item) : ?>
			<tr>
				<td><?= $item['username'] ?></td>
				<td><?= $item['email'] ?></td>
				<td><?= $item['sex'] ?></td>
				<td><?= $item['create_time'] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<div class="nav">
		<?php		
			if($page == 1) {
				echo "<span>首页</span>";
			} else {
				echo "<a href='?page=1'>首页</a>";
			}
			echo ' | ';

			if($prev == $page) {
				echo "<span>上一页</span>";
			} else {
				echo "<a href='?page={$prev}'>上一页</a>";
			}
			echo ' | ';

			if($next == $page) {
				echo "<span>下一页</span>";
			} else {
				echo "<a href='?page={$next}'>下一页</a>";
			}
			echo ' | ';

			if($page == $allPage) {
				echo "<span>尾页</span>";
			} else {
				echo "<a href='?page={$allPage}'>尾页</a>";
			}
		?>	
	</div>
	
<style>
	.nav {margin: 8px 100px;};
	span { color: #aaa; }
	a { text-decoration: none; color:darkgreen; }
</style>

</body>