<?php
if ($_GET['action']=='login') {
  if($_POST['name']=='admin' && $_POST['pwd']==123456) {
    setcookie('userName',$_POST['name'],time()+3600*24);
    header('Location:index.php');
  } else {
    echo '<script> alert("登录失败");</script>';
  };
}elseif ($_GET['action']=='logout') {
  setcookie('name','',time()-3600);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>
?action=login" method="post">
  <fieldset>
    <legend>用户登录:</legend>
    <label for="name">用户名:</label>
    <input type="text" name="name" id="name" >
    <label for="pwd">密码:</label>
    <input type="password" name="pwd" id="pwd" >
    <input type="submit" value="提交">
  </fieldset>
</form>

</body>
</html>