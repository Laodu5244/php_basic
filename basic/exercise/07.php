<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body style="background:skyblue;">

<form method="post">
  名字: <input type="text" name="name">
  年龄: <input type="text" name="age">
  <input type="submit" value='提交'>
</form>

<?php
if ($_POST['name']) {
  echo '欢迎' . $_POST['name'] . '!' . '<br>';
  echo '你的年龄是: ' . $_POST['age'] . '岁';
}
echo '<hr>';

$res = isset($_GET['res']) ? htmlspecialchars($_GET['res']) : '';
if ($res) {
  if ($res == 'runoob') {
    echo '菜鸟教程<br>http://www.runoob.com';
  } elseif ($res == 'google') {
    echo 'Google 搜索<br>http://www.google.com';
  } elseif ($res == 'taobao') {
    echo '淘宝<br>http://www.taobao.com';
  }
} else {
  ?>

<form method="get">
  <select name="res">
    <option value="">选择一个站点:</option>
    <option value="runoob">runoob</option>
    <option value="google">google</option>
    <option value="taobao">taobao</option>
  </select>
  <input type="submit" value="submit">
</form>

<?php
}
echo '<hr>';
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';
if ($q) {
  if ($q == 'RUNOOB') {
    echo '菜鸟教程<br>http://www.runoob.com';
  } else if ($q == 'GOOGLE') {
    echo 'Google 搜索<br>http://www.google.com';
  } else if ($q == 'TAOBAO') {
    echo '淘宝<br>http://www.taobao.com';
  }
} else {
  ?>

<form action="" method="get">
  <input type="radio" name="q" value="RUNOOB" />Runoob
  <input type="radio" name="q" value="GOOGLE" />Google
  <input type="radio" name="q" value="TAOBAO" />Taobao
  <input type="submit" value="提交">
</form>

<?php
}
echo '<hr>';
$i = isset($_POST['i']) ? $_POST['i'] : '';
if (is_array($i)) {
  $sites = array(
    'RUNOOB' => '菜鸟教程: http://www.runoob.com',
    'GOOGLE' => 'Google 搜索: http://www.google.com',
    'TAOBAO' => '淘宝: http://www.taobao.com',
  );
  foreach ($i as $val) {
    echo $sites[$val] . PHP_EOL;
  }
} else {
  ?>

<form action="" method="post">
  <select multiple="multiple" name="q[]">
  <option value="">选择一个站点:</option>
  <option value="RUNOOB">Runoob</option>
  <option value="GOOGLE">Google</option>
  <option value="TAOBAO">Taobao</option>
  </select>
  <input type="submit" value="提交">
</form>

<?php
}
echo '<hr>';
$q = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($q)) {
  $sites = array(
    'RUNOOB' => '菜鸟教程: http://www.runoob.com',
    'GOOGLE' => 'Google 搜索: http://www.google.com',
    'TAOBAO' => '淘宝: http://www.taobao.com',
  );
  foreach ($q as $val) {
    // PHP_EOL 为常量，用于换行
    echo $sites[$val] . PHP_EOL;
  }

} else {
?>

<form action="" method="post">
  <input type="checkbox" name="q[]" value="RUNOOB"> Runoob<br>
  <input type="checkbox" name="q[]" value="GOOGLE"> Google<br>
  <input type="checkbox" name="q[]" value="TAOBAO"> Taobao<br>
  <input type="submit" value="提交">
</form>

<?php } ?>

</body>
</html>