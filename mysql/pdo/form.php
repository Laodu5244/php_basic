<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>php</title>
</head>
<body>

<h2>get请求</h2>
  <?php print_r($_GET);?>

<h2>post请求</h2>
<form method="post">
  姓名: <input type="text" name="name">
  年龄: <input type="text" name="age">
  <button>提交</button>
</form>

<?phpprint_r($_POST);?>
</body>
</html>