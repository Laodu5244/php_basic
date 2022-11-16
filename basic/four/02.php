<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>upload</title>
</head>
<body>
  
<!--文件上传-->
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
  <input type="file" name="up">
  <button>提交</button>
</form>

</body>
</html>