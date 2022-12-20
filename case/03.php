<?php if (empty($_POST)):?>
<form action="./03.php" method="post">
	用户名: <input type="text" name="user"><br>
	<input type="submit" value="提交">
	<input type="reset" value="重置">
</form>

<?php else: echo 'Hello,'.$_POST['user']; endif;?>