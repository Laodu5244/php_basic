<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand blog" href="../">我的博客</a>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../">
					  <?= '主页' ?>
					</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../about.php">
						<?= '关于' ?>
					</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../article.php">
					  <?= '文章' ?>
					</a>
        </li>
      </ul>
      <span class="navbar-text">
			  <?php
					$name = 'Laodu';
					$date = date('y-m-d H:i:s');
					echo "你好 {$name}, 现在时间: {$date}";
				?>
      </span>
    </div>
  </div>
</nav>

<style>
.blog {
	font-family: kaiti;
	font-weight: bold;
	color: orangered;
	font-size: 26px;
}
</style>