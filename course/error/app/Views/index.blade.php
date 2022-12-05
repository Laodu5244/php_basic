<?php
if (!empty($_SESSION['Error'])) {
	echo $_SESSION['Error'];
} ?>

<form action="controller.php" method="post">
	<input type="text" name="title">
	<button>提交</button>
</form>