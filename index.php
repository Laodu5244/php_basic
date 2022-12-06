<body style="background:#CDC9A5">
  <form method="post">
    <p>姓名: <input type="text" name="name" /></p>
    <p>年龄: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
  </form>
</body>

<?php 
if(!empty($_POST['name']) && !empty($_POST['age'])){
  echo '你好'.$_POST['name'].'，'.'你'.$_POST['age'].'岁了.';
} else {
	echo '请输入姓名/年龄';
} ?>