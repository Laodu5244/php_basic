<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="06.host.php" method="post">
		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php
if(!empty($_SERVER['HTTP_REFERER'])){
	$url = parse_url($_SERVER['HTTP_REFERER']);
	if ($url['host'] != 'study.com') {
		echo '页面失效';
		exit;
	} else {
		echo '可以正常访问';
	}
}