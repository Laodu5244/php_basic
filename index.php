<?php echo "Hello World !"; ?>

<form method="post">
  <p>姓名: <input type="text" name="name" /></p>
  <p>年龄: <input type="text" name="age" /></p>
  <p><input type="submit" /></p>
</form>

<?php 
if($_POST['name']){
  echo '你好,'.$_POST['name'].'你'.$_POST['age'].'岁了';
}
?>